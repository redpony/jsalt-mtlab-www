---
layout: default
title: Leaderboard
---
# Leaderboard

This page contains the leaderboard which will you show you how well you are doing on the test set on relative to the other teams. It is updated automatically every few seconds.

<script src="homework.js">
</script>

<table id="leaderboard">
  <thead style="background-color: lightgrey">
    <tr>
      <th colspan="2">
        Rank
      </th>
      <th>
        <a href="javascript:;" onclick="resort(0, 0); drawLeaderboard(); return false">Team Name</a>
      </th>
      <th valign="top">
        <a href="javascript:;" onclick="resort(2, 0); resort(1, 1); drawLeaderboard(); return false">Failures</a><br/>
        <span class="small"></span>
      </th>
      <th valign="top">
        <a href="javascript:;" onclick="resort(1, 1); resort(2, 0); drawLeaderboard(); return false">Model Score</a><br/>
        <span class="small"></span>
      </th>
    </tr>
  </thead>
  <tbody id="scorediv">
  </tbody>
  <tfoot>
    <tr>
      <td colspan="8" align="center" id="updatedDiv" style="background-color: lightgrey">
      </td>
    </tr>
  </tfoot>
</table>

<script src="leaderboard.js">
</script>
