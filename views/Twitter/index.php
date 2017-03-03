<h2>Followers and Friends</h2>
<table>
 <tr>
  <th>ID</th>
 <tr>
<?php foreach($this->followers as $follower) { ?>
 <tr>
  <td><?=$follower['follower']?></td>
 <tr>
<?php } ?>
<?php foreach($this->friends as $friend) { ?>
 <tr> 
  <td><?=$friend['friend']?></td>
 <tr>
<?php } ?>
</table>
