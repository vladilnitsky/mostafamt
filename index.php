<?php

require_once 'Digraph.php';
require_once 'Topological.php';
require_once 'DepthFirstOrder.php';
require_once 'DirectedCycle.php';
require_once 'DirectedDFS.php';

$v = 3 ;
$digraph = new Digraph\Digraph(4);
$digraph->addEdge(1,0);
$digraph->addEdge(0,2);
$digraph->addEdge(2,1);

$topo = new Digraph\Topological($digraph);

echo $topo->isDAG() . '<br>' . $digraph;
