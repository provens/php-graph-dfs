class GraphDFS 
{
    protected $_length = 0;
    protected $_n = array();
    protected $_visited = array();
 
    public function __construct()
    {
        $this->_n = array(
            array(0, 1, 0, 1, 0, 0, 0),
            array(1, 0, 1, 0, 1, 0, 0),
            array(0, 1, 0, 1, 0, 0, 1),
            array(1, 0, 1, 0, 0, 1, 1),
            array(0, 1, 0, 0, 0, 1, 0),
            array(0, 0, 0, 1, 1, 0, 0),
            array(0, 0, 1, 1, 0, 0, 0),
        );
 
        $this->_length = count($this->_n);
         $this->_initVisited();
    }
 
    protected function _initVisited()
    {
        for ($i = 0; $i < $this->_length; $i++) {
            $this->_visited[$i] = 0;
        }
    }
 
    public function dfs($node)
    {
        $this->_visited[$node] = 1;
         echo $node . "-> ";
 
        for ($i=0; $i < $this->_length; $i++) {
            if ($this->_n[$node][$i] == 1 && !$this->_visited[$i]) {
                $this->dfs($i);
            }
        }
    }
}
 
$n = new GraphDFS();
$n->dfs(5);