<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Untitled Document</title>
</head>
<?php
include_once("connection.php");
class ex extends connection
{
 var $n;
 var $rec;
 var $recs;
 var $maxno;
 var $data;
 var $res;
 function InsertUpdateDelete($sq)
  {
    $this->n=mysql_query($sq);
	return $this->n;
}
function ReadRecordSet($s)
{
  $this->rec=mysql_query($s);
  return $this->rec;
 }
 function UniqueRecords($s)
  {
    $this->rec=mysql_query($s);
	$this->recs=mysql_fetch_array($this->rec);
	return $this->recs;
}
function DropDownData($s)
 {
   $this->recs=mysql_fetch_array($this->rec);
   return $this->recs;
  }
  function NextNumber($s)
  {
    $this->data=mysql_query($s);
	$this->res=mysql_fetch_array($this->data);
	if($this->res[0]==null)
	$this->maxno=1;
	else
	$this->maxno=$this->res[0];
	return $this->maxno;
	}
}
?>	 	
<body>

</body>
</html>
