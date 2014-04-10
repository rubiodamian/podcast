<?php

/**
 * index actions.
 *
 * @package    entrega3
 * @subpackage index
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class mainActions extends sfActions {

    private function checkHab() {
        $hab = ConfiguracionTable::getSitioHabilitado()->execute();
        $hab = $hab[0]['sitioHabilitado'];
        if ($hab == 0) {
            $this->redirect('@error');
        }
    }

    public function executeIndex(sfWebRequest $request) {
        $this->checkHab();
        $CPP = ConfiguracionTable::getCantidadPodcastsPorPagina()->execute()->toArray();
        $CPP = $CPP[0]['cantidadPodcastPorPagina'];

        $this->pager = new sfDoctrinePager('Podcast', $CPP);
        if (isset($_GET['nombre'])) {
            $this->pager->setQuery(PodcastTable::getPodcastsLikeHabilitados($request->getParameter('nombre')));
        } else {
            $this->pager->setQuery(PodcastTable::getPodcastsHabilitados());
        }
        if ($request->getParameter('select')) {
            $order = '';
            $order2 = '';
            switch ($request->getParameter('select')) {
                case 'nombre':
                    $order = 'nombre';
                    break;
                case 'fecha':
                    $order = 'updated_at';
                    break;
                default :
                    $order = 'nombre';
            }

            if ($request->getParameter('select2')) {
                switch ($request->getParameter('select2')) {
                    case 'up':
                        $order2 = 'ASC';
                        break;
                    case 'down':
                        $order2 = 'DESC';
                        break;
                    default :
                        $order2 = 'ASC';
                }
            }
            $this->pager->getQuery()->orderBy($order . ' ' . $order2);
        }
        $this->pager->setPage($request->getParameter('page', 1));
        $this->pager->init();
        $this->filtro = new PodcastFormFilter();
    }

    public function executeEpisodios(sfWebRequest $request) {
        $this->checkHab();
        $this->podcast = PodcastTable::getPodcastPorId($request->getParameter('listar'))->execute();
        $this->podcast = $this->podcast[0];
        sfContext::getInstance()->getUser()->setAttribute('podcastAct', $this->podcast['idPodcast']);
        $this->episodios = EpisodioTable::getEpisodiosDePodcast($request->getParameter('listar'))->execute();
    }

    public function executeDescargar(sfWebRequest $request) {
        if (!$request->getParameter('id')) {
            $this->redirect('@error');
        }

        $episode = $this->getRoute()->getObject();
        $file = sfConfig::get('sf_root_dir') . '/web/uploads/music/' . $episode->fuentemp3;
        $type = finfo_file(finfo_open(FILEINFO_MIME_TYPE), $file);
        $size = filesize($file);
        $this->getResponse()->clearHttpHeaders();
        $this->getResponse()->setHttpHeader('Content-Type', $type);
        $this->getResponse()->setHttpHeader('Pragma: public', true);
        $this->getResponse()->setHttpHeader('Expires', 0);
        $this->getResponse()->setHttpHeader('Content-Disposition', "attachment; filename=" . $episode->nombre);
        $this->getResponse()->setHttpHeader('Content-Transfer-Encoding', 'binary');
        $this->getResponse()->setHttpHeader('Content-Length', $size);
        $this->getResponse()->setContent(file_get_contents($file));
        $this->getResponse()->send();
    }

    public function executeError(sfWebRequest $request) {
        
    }

    protected function processForm(sfWebRequest $request, sfForm $form) {
        $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
        if ($form->isValid()) {
            $podcast = $form->save();

            $this->redirect('main/edit?id_podcast=' . $podcast->getIdPodcast());
        }
    }

}
