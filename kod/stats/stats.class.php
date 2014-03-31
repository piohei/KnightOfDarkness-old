<?php
class Stats{
    var $stats;
    function getStats(){
        if(empty($this->stats)){
            $sql="select sum(ziemia) z
                    , sum(budowniczowie) b 
                    , sum(rolnicy) r
                    , sum(kowale) k
                    , sum(gornicy_zlota) zl
                    , sum(gornicy_zelaza) ze
                    , sum(lucznicy) l
                    , sum(piechota) p
                    , sum(husaria) h
                    from KSIESTWA";
            $rs = mysql_query($sql);
            $row = mysql_fetch_array($rs);
            foreach ($row as $key=>$value) {
                $tmp[$key]=floor($value/1000)." ty¶";
            }
            $this->stats= $tmp;
            return $this->stats;
        }else{
            return $this->stats;
        }
    }
}
?>
