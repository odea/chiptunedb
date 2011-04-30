<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $track->getId() ?></td>
    </tr>
    <tr>
      <th>Title:</th>
      <td><?php echo $track->getTitle() ?></td>
    </tr>
    <tr>
      <th>Number:</th>
      <td><?php echo $track->getNumber() ?></td>
    </tr>
    <tr>
      <th>Artist:</th>
      <td><?php echo $track->getArtistId() ?></td>
    </tr>
    <tr>
      <th>Album:</th>
      <td><?php echo $track->getAlbumId() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $track->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $track->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('track/edit?id='.$track->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('track/index') ?>">List</a>
