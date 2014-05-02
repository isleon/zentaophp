<?php
/**
 * The model file of booklist module of ZenTaoPHP.
 *
 * The author disclaims copyright to this source code.  In place of
 * a legal notice, here is a blessing:
 * 
 *  May you do good and not evil.
 *  May you find forgiveness for yourself and forgive others.
 *  May you share freely, never taking more than you give.
 */
?>
<?php
class booklistModel extends model
{
    /**
     * Get article lists.
     * 
     * @access public
     * @return array
     */
    public function getList($pager = null)
    {
        return $this->dao->select('*')->from('booklist')->orderBy('id desc')->page($pager)->fetchAll();
    }

    /**
     * Get an article.
     * 
     * @param  int    $id 
     * @access public
     * @return object
     */
    public function getById($id)
    {
        return $this->dao->findById($id)->from('booklist')->fetch();
    }

    /**
     * Create an article.
     * 
     * @access public
     * @return void
     */
    public function create()
    {
        $article = fixer::input('post')->specialchars('title, content')->add('date', date('Y-m-d H:i:s'))->get();
        $this->dao->insert('booklist')->data($article)->autoCheck()->batchCheck('title,content', 'notempty')->exec();
        return $this->dao->lastInsertID();
    }

    /**
     * Update an article.
     * 
     * @param  int    $articleID 
     * @access public
     * @return void
     */
    public function update($articleID)
    {
        $article = fixer::input('post')->specialchars('title, content')->get();
        $this->dao->update('booklist')->data($article)->where('id')->eq($articleID)->exec();
    }

    /**
     * Delete an article.
     * 
     * @param  int    $id 
     * @access public
     * @return void
     */
    public function delete($id)
    {
        $this->dao->delete()->from('booklist')->where('id')->eq($id)->exec();
    }
}
