<?php
/**
 * The control file of booklist module of ZenTaoPHP.
 *
 * The author disclaims copyright to this source code.  In place of
 * a legal notice, here is a blessing:
 * 
 *  May you do good and not evil.
 *  May you find forgiveness for yourself and forgive others.
 *  May you share freely, never taking more than you give.
 */
class booklist extends control
{
    /**
     * The construct function.
     * 
     * @access public
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        $this->app->loadLang('index');
    }

    /**
     * The index page of booklist module.
     * 
     * @access public
     * @return void
     */
    public function index($recTotal = 0, $recPerPage = 20, $pageID = 0)
    {
        $this->app->loadClass('pager');
        $pager = new pager($recTotal, $recPerPage, $pageID);

        $this->view->header->title = $this->lang->booklist->index;
        $this->view->booklists     = $this->booklist->getList($pager);
        $this->view->pager         = $pager;
        $this->display();
    }

    /**
     * Create an booklist.
     * 
     * @access public
     * @return void
     */
    public function create()
    {
        if(!empty($_POST))
        {
            $booklistID = $this->booklist->create();
            if(dao::isError()) die(js::error(dao::getError()) . js::locate('back'));
            die(js::locate(inlink('index')));
        }

        $this->view->header->title = $this->lang->booklist->add;
        $this->display();
    }

   /**
     * Update an booklist.
     * 
     * @param  int    $id 
     * @access public
     * @return void
     */
    public function edit($id)
    {
        if(!empty($_POST))
        {
            $this->booklist->update($id);
            $this->locate(inlink('index'));
        }
        else
        {
            $this->view->header->title = $this->lang->booklist->edit;
            $this->view->booklist       = $this->booklist->getByID($id);
            $this->display();
        }
    }

    /**
     * View an booklist.
     * 
     * @param  int    $id 
     * @access public
     * @return void
     */
    public function view($id)
    {
        $this->view->header->title = $this->lang->booklist->view;
        $this->view->booklist       = $this->booklist->getByID($id);
        $this->display();
    }

    /**
     * Delete an booklist.
     * 
     * @param  int    $id 
     * @access public
     * @return void
     */
    public function delete($id)
    {
        //$this->booklist->delete($id);
        $this->locate(inlink('index'));
    }
}
