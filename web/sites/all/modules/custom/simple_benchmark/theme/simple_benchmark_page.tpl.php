<?php

/**
 * @file
 * Theme "Local tasks fixed to bottom" wrapper.
 */
?>

<div class="simple-benchmark">
  <table class="simple-benchmark__results_table">
    <thead>
      <tr>
        <th>Total time</th>
        <th>Average</th>
        <th>Best</th>
        <th>Worst</th>
        <th>PHP version</th>
        <th>PHP cache</th>
        <th>Platform</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="simple-benchmark__results_table_total"></td>
        <td class="simple-benchmark__results_table_average"></td>
        <td class="simple-benchmark__results_table_best"></td>
        <td class="simple-benchmark__results_table_worst"></td>
        <td> <?php print $php_version; ?></td>
        <td><?php print $cache; ?></td>
        <td><?php print $platform; ?></td>
      </tr>
    </tbody>
  </table>
  <div class="log">
    <div class="header"><strong>All pings:</strong></div>
    <div class="content"></div>
  </div>
</div>
