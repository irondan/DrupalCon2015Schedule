<?php include('data.php'); ?><!DOCTYPE html>
<html>
  <head>
    
  </head>
  <body>
  <div id="sessions">
    <input class="search" placeholder="Search" />
  Sort
    <button class="sort" data-sort="title">
      Title
    </button>
    <button class="sort" data-sort="day">
      Day
    </button>
    <button class="sort" data-sort="start">
      Start
    </button>
    <button class="sort" data-sort="end">
      End
    </button>
  <table>
  <thead>
  	<tr>
  		<th>Session/Event</th>
      <th>Track</th>
  		<th>Day</th>
  		<th>Start</th>
  		<th>End</th>
  	</tr>
    </thead>
    <tbody class="list">
  	<?php
  		foreach ($data as $session) {
  			echo '<tr>';
  			echo '<td class="title"><a href="https://events.drupal.org' . $session['path'] . '" title="' . $session['title'] . '" target="_new">' . $session['title'] . '</a></td>';
  			echo '<td>' . $session['track'] . '</td>';
        echo '<td>' . date('l', $session['start']) . '<span class="day" style="display:none;">'  . date('N', $session['start']) . '</span></td>';
  			echo '<td>' . date('g:iA', $session['start']) . '<span class="start" style="display:none;">'  . date('HI', $session['start']) . '</span></td>';
  			echo '<td>' . date('g:iA', $session['end']) . '<span class="end" style="display:none;">'  . date('HI', $session['end']) . '</span></td>';
  			echo '</tr>';
  		}
  	?>
    </tbody>
  </table>
  </div>
  <script src="list.min.js"></script>
    <script type="text/javascript">
      var options = {
          valueNames: ['title', 'day', 'start', 'end']
      };

      var sessionList = new List('sessions', options);
    </script>
  </body>
</html>