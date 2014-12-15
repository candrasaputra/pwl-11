<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>AdminLTE | Dashboard</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>


        <!-- Ionicons -->
        <link href="http://code.ionicframework.com/ionicons/1.5.2/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="<?php echo base_url()?>assets/lte/css/AdminLTE.css" rel="stylesheet" type="text/css" />
        <!-- demo style -->
        

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <!-- TinyMCE -->
        <script type="text/javascript" src="<?php echo base_url()?>assets/tinymce/js/tiny_mce/tiny_mce.js"></script>
        <script type="text/javascript">
            tinyMCE.init({
        // memilih mode, them, skin dan plugin yg di inginkan
        mode : "textareas",
        theme : "advanced",
        skin : "o2k7",
        plugins : "autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,inlinepopups,autosave",

        // memilih Theme/fasilitas apa aja yg aktip
        theme_advanced_buttons1 : "newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,styleselect,formatselect,fontselect,fontsizeselect",
        theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
        theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
        theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak,restoredraft",
        theme_advanced_toolbar_location : "top",
        theme_advanced_toolbar_align : "left",
        theme_advanced_statusbar_location : "bottom",
        theme_advanced_resizing : true,

        content_css : "css/word.css",

        template_external_list_url : "lists/template_list.js",
        external_link_list_url : "lists/link_list.js",
        external_image_list_url : "lists/image_list.js",
        media_external_list_url : "lists/media_list.js",

        template_replace_values : {
            username : "Some User",
            staffid : "991234"
        }
            });
        </script>
<!-- /TinyMCE -->
    </head>
    <body class="skin-blue">
               <!-- Main content -->
                <section class="content">
                    <div class='row'>
                        <div class='col-xs-12'>
                            <div class="nav-tabs-custom">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#fa-icons" data-toggle="tab"><?php echo $title ?></a></li>
                                </ul>
                                <div class="tab-content">
                                    <form method="post" action="<?php echo site_url('admin/artikel/proses_edit_artikel'); ?>">
                                        <p>Title</p>
                                        <input type="text" name="judul" style="width: 30%" value="<?php echo $artikel->judul_artikel;?>" />
                                        <br/>
                                        <br/>
                                        <p>Contents</p<br/>
                                    
                                        <textarea id="elm1" name="isi" rows="15" cols="80" style="width: 80%"><?php echo $artikel->isi_artikel;?></textarea>
                                    
                                        <p>Kategori</p>
                                        <select name="kd_kat">
                                            <?php foreach($kategori as $n):?>
                                                 <option value="<?php echo $n->kd_kat_artikel?>" <?php if($n->kd_kat_artikel == $artikel->kd_kat_artikel){echo("selected");}?>><?php echo $n->nm_kat_artikel?></option>   
                                            <?php endforeach?>
                                            
                                        </select>
                                        <br/>
                                        <br/>
                                        <p>Status</p>
                                        <select name="status">
                                            <option value="publish" <?php if($artikel->status_artikel == 'publish'){echo("selected");}?>>publish</option>
                                            <option value="draff" <?php if($artikel->status_artikel == 'draff'){echo("selected");}?>>draff</option>
                                        </select>
                                        <br/>
                                        <br/>
                                        <input type="hidden" name="kode" value="<?php echo $artikel->id_artikel;?>" />
                                        <input type="submit" value="simpan" name="tbKirim"/>
                                    </form>
                                </div><!-- /.tab-content -->
                            </div><!-- /.nav-tabs-custom -->
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

        
    </body>
</html>
