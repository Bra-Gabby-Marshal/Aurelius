<?php require_once('couch/cms.php');?>

<cms:template clonable='1' title='Portfolio Categories' executable='0'>
<cms:editable name='folder_desc' label='Description' desc='Enter description of porfolio category here' type='richtext'/>
<cms:editable name='folder_blurb' label='Short description' desc='Enter one line description of porfolio category here' type='text'/>
</cms:template>

<?php COUCH :: invoke();?>