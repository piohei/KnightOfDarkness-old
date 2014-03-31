<?php

/**
 * Implementacja grafu skierowanego.
 * @author Micha³ Kozak
 * @version 1.0.0
 */
class Graph{

	/**
	 * Macierz po³±czeñ pomiêzy wierzcho³kami.
	 * @var array
	 */
	private $nodes = array();


	/**
	 * Tablica danych przypisanych wierzcho³kom.
	 * @var array
	 */
	private $nodesData = array();


	/**
	 * Dodaje wierzcho³ek do grafu.
	 * @param mixed $node
	 */
	public function addNode( $node ){
		if( !isset($this->nodes[$node]) ){
			$this->nodes[$node] = array();
		}
	}


	/**
	 * Usuwa wierzcho³ek z grafu.
	 * @param mixed $node
	 */
	public function delNode( $node ){
		unset( $this->nodes[$node] );
		unset( $this->nodesData[$node] );
		foreach( $this->nodes as $tmpNode => $null ){
			unset( $this->nodes[$tmpNode][$node] );
		}
	}


	/**
	 * Dodaje krawêd¼ $node1 -> $node2 do grafu.
	 * @param mixed $node1
	 * @param mixed $node2
	 */
	public function addEdge( $node1, $node2, $count = 1 ){

		if( isset($this->nodes[$node1]) && isset($this->nodes[$node2]) ){
			if (isset($this->nodes[$node1][$node2])){
				$this->nodes[$node1][$node2] += $count;
			} else {
				$this->nodes[$node1][$node2] = $count;
			}
		}
	}


	/**
	 * Usuwa krawêd¼ z grafu ($node1 -> $node2)
	 * @param mixed $node1
	 * @param mixed $node2
	 */
	public function delEdge( $node1, $node2 ){
		unset( $this->nodes[$node1][$node2] );
	}


	/**
	 * Sprawdza czy graf zawiera wierzcho³ek.
	 * @param mixed $node
	 * @return boolean
	 */
	public function containNode( $node ){
		return isset( $this->nodes[$node] );
	}


	/**
	 * Sprawdza czy graf zawiera krawêd¼ $node1 -> $node2.
	 * @param mixed $node1
	 * @param mixed $node2
	 * @return boolean
	 */
	public function containEdge( $node1, $node2 ){
		return isset( $this->nodes[$node1][$node2] );
	}


	/**
	 * Ustawia dane dla wierzcho³ka. Je¶li jako dane podamy NULL to dane
	 * s± usuwane.
	 * @param mixed $node
	 * @param mixed $data
	 */
	public function setNodeData( $node, $data ){
		if( isset($this->nodes[$node]) ){
			if( is_null($data) ){
				unset( $this->nodesData[$node] );
			}else{
				$this->nodesData[$node] = $data;
			}
		}
	}


	/**
	 * Pobiera dane skojarzone z danym wierzcho³kiem. Je¶li takich nie ma
	 * zwraca NULL
	 * @param mixed $node
	 * @return mixed
	 */
	public function getNodeData( $node ){
		if( isset($this->nodesData[$node]) ){
			return $this->nodesData[$node];
		}else{
			return NULL;
		}
	}


	/**
	 * Zwraca rozmiar grafu (liczbê wierzcho³ków).
	 * @return integer
	 */
	public function size(){
		return count( $this->nodes );
	}


	/**
	 * Zwraca tablicê grafów spójnych utworzon± z aktualnego grafu
	 * @return array
	 */
	public function extractCoherentGraphs(){

		// inicjalizacja algorytmu
		$graphs = array();
		$nodeMemory = array();
		$graphsIndex = -1;
		foreach( $this->nodes as $node => $none ){
			$nodeList[$node] = 1;
		}

		// czê¶æ w³a¶ciwa algorytmu
		while( count($nodeList) ){
			$startNode = reset( $nodeMemory );
			if( $startNode === false ){
				$startNode = key( $nodeList );
				$graphsIndex++;
				$graphs[$graphsIndex] = new Graph();
			}else{
				$startNode = key( $nodeMemory );
				unset( $nodeMemory[$startNode] );
			}
			unset( $nodeList[$startNode] );
			reset( $nodeList );
			$graphs[$graphsIndex]->addNode( $startNode );
			if( $this->nodes[$startNode][$startNode] ){
				$graphs[$graphsIndex]->addEdge( $startNode, $startNode );
			}
			while( !is_null($node = key($nodeList)) ){
				if( $this->nodes[$startNode][$node] ){
					$graphs[$graphsIndex]->addNode( $node );
					$graphs[$graphsIndex]->addEdge( $startNode, $node, $this->nodes[$startNode][$node] );
					$nodeMemory[$node] = 1;
				}
				if( $this->nodes[$node][$startNode] ){
					$graphs[$graphsIndex]->addNode( $node );
					$graphs[$graphsIndex]->addEdge( $node, $startNode, $this->nodes[$node][$startNode] );
					$nodeMemory[$node] = 1;
				}
				next( $nodeList );
			}
			reset( $nodeList );
		}

		return $graphs;
	}
	/**
	 * Zwraca  tablicê wierzcho³ków w grafie.
	 * @return array
	 */
	public function getNode(){
		return $this->nodes ;
	}

	/**
	 * Zwraca listê (tablicê) wierzcho³ków w grafie.
	 * @return array
	 */
	public function getNodeList(){
		$nodeList = array();
		foreach( $this->nodes as $node => $none ){
			$nodeList[] = $node;
		}
		return $nodeList;
	}
}

?>
