<fieldset>
  <legend><span class="fieldset-legend"><?php print t('File details'); ?></span></legend>
  <div class="fieldset-wrapper">
    <table>
      <tr>
        <th><?php print t('ID'); ?></th>
        <th><?php print t('Label'); ?></th>
        <th><?php print t('Size'); ?></th>
        <th><?php print t('Mimetype'); ?></th>
        <th><?php print t('Created'); ?></th>
      </tr>
      <?php foreach($datastreams as $key => $value): ?>
        <tr>
          <td><?php if(isset($value['id'])): ?><?php print $value['id']; ?><?php endif; ?></td>
          <td><?php if(isset($value['label_link'])): ?><?php print $value['label_link']; ?><?php endif; ?></td>
          <td><?php if(isset($value['size'])): ?><?php print $value['size']; ?><?php endif; ?></td>
          <td><?php if(isset($value['mimetype'])): ?><?php print $value['mimetype']; ?><?php endif; ?></td>
          <td><?php if(isset($value['created_date'])): ?><?php print $value['created_date']; ?><?php endif; ?></td>
        </tr>
      <?php endforeach; ?>
    </table>
  </div>
</fieldset>
