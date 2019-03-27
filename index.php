<?php

function html_table($data = array())
{
    $rows = array();
    foreach ($data as $row) {
        $cells = array();
        foreach ($row as $key => $cell) {
            $cells[] = "<td>{$cell}</td>";
			if ($key=="first_name")
			{
				$first_name=$cell;
			}
			
			if ($key=="last_name")
			{
				$last_name=$cell;
			}
			
			if ($key=="email")
			{
				$email=$cell;
			}
			
        }
        array_push($cells,"<td> <button class='btn' onClick=alert('Name:".$first_name.".".$last_name.str_repeat('&nbsp;', 5)."email:".$email."') >Button</button>  </td>");
        $rows[] = "<tr>" . implode('', $cells) . "</tr>";
    }
    return "<table class='hci-table'>" . implode('', $rows) . "</table>";
}

$people = array(
   array('id'=>1, 'first_name'=>'John', 'last_name'=>'Smith', 'email'=>'john.smith@hotmail.com'),
   array('id'=>2, 'first_name'=>'Paul', 'last_name'=>'Allen', 'email'=>'paul.allen@microsoft.com'),
   array('id'=>3, 'first_name'=>'James', 'last_name'=>'Johnston', 'email'=>'james.johnston@gmail.com'),
   array('id'=>4, 'first_name'=>'Steve', 'last_name'=>'Buscemi', 'email'=>'steve.buscemi@yahoo.com'),
   array('id'=>5, 'first_name'=>'Doug', 'last_name'=>'Simons', 'email'=>'doug.simons@hotmail.com')
);

echo html_table($people);

?>