<?php
session_start();

?>
<HTML>
    <HEAD>
        <TITLE>zakat online</TITLE>
        <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1251">
        <link rel="icon shortcut" href="images/zakat_logo.png" />
        <script type="text/javascript"  language="JavaScript" src="js/ajax.js"></script>
        <link rel="stylesheet" type="text/css" href="js/epoch_styles.css" />
        <script type="text/javascript" src="js/epoch_classes.js"></script>
        <script src="js/jquery-1.4.min.js" type="text/javascript"></script>        
        <script type="text/javascript">
            var dp_cal;
            window.onload = function () {
                dp_cal  = new Epoch('epoch_popup','popup',document.getElementById('popup_container'));
            };
        </script>
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/ddaccordion.js"></script>
        <script type="text/javascript">
            ddaccordion.init({
                headerclass: "expandable", //Shared CSS class name of headers group that are expandable
                contentclass: "categoryitems", //Shared CSS class name of contents group
                revealtype: "click", //Reveal content when user clicks or onmouseover the header? Valid value: "click", "clickgo", or "mouseover"
                mouseoverdelay: 200, //if revealtype="mouseover", set delay in milliseconds before header expands onMouseover
                collapseprev: true, //Collapse previous content (so only one open at any time)? true/false
                defaultexpanded: [0], //index of content(s) open by default [index1, index2, etc]. [] denotes no content
                onemustopen: false, //Specify whether at least one header should be open always (so never all headers closed)
                animatedefault: false, //Should contents open by default be animated into view?
                persiststate: true, //persist state of opened contents within browser session?
                toggleclass: ["", "openheader"], //Two CSS classes to be applied to the header when it's collapsed and expanded, respectively ["class1", "class2"]
                togglehtml: ["prefix", "", ""], //Additional HTML added to the header when it's collapsed and expanded, respectively  ["position", "html1", "html2"] (see docs)
                animatespeed: "fast", //speed of animation: integer in milliseconds (ie: 200), or keywords "fast", "normal", or "slow"
                oninit:function(headers, expandedindices){ //custom code to run when headers have initalized
                    //do nothing
                },
                onopenclose:function(header, index, state, isuseractivated){ //custom code to run whenever a header is opened or closed
                    //do nothing
                }
            })
        </script>
        <script type="text/css" src="css/style1.css"></script>
        <style type="text/css">
            <!--
            img {
                border: none;
            }
            .tah10 {
                font-family: Tahoma;
                font-size: 10px;
                text-decoration: none;
                color: #000000;
            }
            .tah11 {
                font-family: Tahoma;
                font-size: 11px;
                text-decoration: none;
                color: #000000;
            }
            .ver10 {
                font-family: Verdana, Arial, Helvetica, sans-serif;
                font-size: 10px;
                text-decoration: none;
                color: #000000;
            }
            .ver11 {
                font-family: Verdana, Arial, Helvetica, sans-serif;
                font-size: 11px;
                text-decoration: none;
                color: #000000;
            }
            .tah9 {
                font-family: Tahoma;
                font-size: 9px;
                text-decoration: none;
                color: #000000;
            }
            .ver9 {
                font-family: Verdana, Arial, Helvetica, sans-serif;
                font-size: 9px;
                text-decoration: none;
                color: #000000;
            }
            td {
                vertical-align: top;
            }
            -->
        </style>
        <style type="text/css">
            <!--
            .bgtop {
                background-repeat: repeat-x;
                background-position: top;
            }
            -->
        </style>
        <style type="text/css">
            <!--
            a {
                font-family: Verdana, Arial, Helvetica, sans-serif;
                font-size: 10px;
                font-weight: bold;
                color: 467B99;
                text-decoration: none;
            }
            a:hover {
                font-family: Verdana, Arial, Helvetica, sans-serif;
                font-size: 10px;
                font-weight: bold;
                color: FF8400;
                text-decoration: none;
            }
            -->
        </style>
        <link href="css/style1.css" rel="stylesheet" type="text/css">
    </HEAD>
    <BODY BGCOLOR=#FFFFFF LEFTMARGIN=0 TOPMARGIN=0 MARGINWIDTH=0 MARGINHEIGHT=0>
        <!-- ImageReady Slices (0005_red.psd - Slices: 03, 04, 05) -->
        <TABLE WIDTH=100% height="100%" BORDER=0 CELLPADDING=0 CELLSPACING=0 bgcolor="#FFFFFF">
            <TR>
                <TD>
                    <TABLE WIDTH=159 BORDER=0 CELLPADDING=0 CELLSPACING=0>
                        <TR>
                            <TD COLSPAN=6>
                                <IMG SRC="images/logo.gif" WIDTH=159 HEIGHT=128 ALT=""></TD>
                        </TR>
                        <TR>
                            <TD>
                                <IMG SRC="images/s1.gif" WIDTH=20 HEIGHT=20 ALT=""></TD>
                            <TD>                                
                                    <IMG SRC="images/r1.gif" WIDTH=29 HEIGHT=20 BORDER=0 ALT="" class=""></A></TD>
                            <TD>                                
                                    <IMG SRC="images/r4.gif" WIDTH=28 HEIGHT=20 BORDER=0 ALT=""></A></TD>
                            <TD>                               
                                    <IMG SRC="images/r4.gif" WIDTH=31 HEIGHT=20 BORDER=0 ALT=""></A></TD>
                            <TD>
                               	<IMG SRC="images/r4.gif" WIDTH=31 HEIGHT=20 BORDER=0 ALT=""></A></TD>
                            <TD>
                                <IMG SRC="images/s2.gif" WIDTH=20 HEIGHT=20 ALT=""></TD>
                        </TR>
                        <TR>
                            <TD COLSPAN=6><img src="images/s3.gif" width=159 height=93 alt=""></TD>
                      </TR>
                        <TR>
                            <TD COLSPAN=6>
                                <IMG SRC="images/h1.jpg" WIDTH=159 HEIGHT=32 ALT=""></TD>
                        </TR>
                        <TR align="center">
                      		 <TD COLSPAN=6 background="images/img5.jpg" width="579" height="75"><a href="?page=artikel_show">
                             <IMG SRC="images/home_642.png"  BORDER=0 ALT="" title="beranda" class="hovergallery2"></a></TD>
                        </TR>
                        <TR align="center"> 
                             <TD COLSPAN=6 background="images/img5.jpg" width="570" height="75"><a href="?page=user_cara_menjadi_user">
                             <img src="images/human_64.png" alt="" title="cara menjadi user" class="hovergallery2"></a></TD>
                      </TR>
                        <TR align="center">
                        	<TD COLSPAN=6 background="images/img5.jpg" width="579" height="75"><a href="?page=user_cara_pembayaran">
                            <img src="images/money_64.png" alt="" title="cara membayar zakat" class="hovergallery2"></a></TD>
                        </TR>
                        <TR align="center">
                            <TD COLSPAN=6 background="images/img5.jpg" width="579" height="75"><a href="?page=bukutamu_index">
                            <img src="images/address_64.png" border=0 alt="" title="buku tamu" class="hovergallery2"></a></TD>
                      </TR>                
                      <TR align="center">
                            <TD COLSPAN=6 background="images/img5.jpg" width="579" height="75"><a href="?page=penerima_register">
                            <img src="images/my-tickets64.png" border=0 alt="" title="Register Penerima" class="hovergallery2"></a></TD>
                      </TR>                        
                    </TABLE>
              </TD>
          <TD>
  <TABLE WIDTH=167 BORDER=0 CELLPADDING=0 CELLSPACING=0>
                        <TR>
                            <TD COLSPAN=2>
                                <IMG SRC="images/h2.jpg" WIDTH=167 HEIGHT=25 ALT=""></TD>
                        </TR>
                        <TR>
                            <TD COLSPAN=2 background="images/bg1.gif" WIDTH=167 HEIGHT=94>
                                <div style="padding:20;padding-top:5;padding-right:10;padding-bottom:0;color:ffffff" class="tah10">
                                Tunaikanlah zakat sebelum kamu dizakati.
                                    <br><br>
                                    <strong>Muhammad Nasrullah</strong> (mahasiswa)</div>
                            </TD>
                        </TR>
                        <TR>
                            <TD COLSPAN=2>
                                <IMG SRC="images/s4.jpg" WIDTH=167 HEIGHT=52 ALT=""></TD>
                        </TR>
                        <TR>
                            <td background="images/bg2.gif" colspan="2">
                                <div class="arrowlistmenu">
                                	<h2 class="menuheader expandable">TENTANG KAMI</h2>
                                    <ul class="categoryitems">
                                    	<li class="li"><a href="?page=aboutus_visimisi">Visi Misi</a></li>
                                        <li class="li"><a href="?page=history_zakat_online">Sejarah</a></li>
                                        <li class="li"><a href="?page=aboutus_advocacy">Advocacy</a></li>
                                    </ul>
									
                                    <h2 class="menuheader expandable">PENDAFTARAN</h2>
                                    <ul class="categoryitems">
                                        <li class="li"><a href="?page=user_register">Form Pendaftaran</a></li>
                                    </ul>
                                    
                                    <h2 class="menuheader expandable">ZAKAT</h2>
                                    <ul class="categoryitems">
                                        <li class="li"><a href="?page=aboutus_zakatguide">Zakat Guide</a></li>
                                        <li class="li"><a href="?page=zakat_type">Zakat Type</a></li>
                                    </ul                                                                    ></div>
                                </div>                            </td>
                        </TR>
                        <TR>
                            <TD COLSPAN=2>
                                <IMG SRC="images/h3.gif" WIDTH=167 HEIGHT=65 ALT=""></TD>
                        </TR>
                        <TR>
                            <TD COLSPAN=2 background="images/bg9.gif" WIDTH=167 HEIGHT=94>&nbsp;</TD>
                        </TR>
                        <TR valign="bottom">
                            <TD COLSPAN=2 background="images/h4.jpg" WIDTH=167 HEIGHT=41 valign="bottom"><div align="center"><img src="images/001_42.gif" border="1" height="35"></div></TD>
                        </TR>
                        <TR>
                            <TD background="images/bg10.jpg" WIDTH=123 HEIGHT=32>
                            <div align="right">
                                               
                             <form action="proses_login.php" method="post">
		<input type="text" size="11" name="username" placeholder="username">

        <input type="password" size="11" name="password" placeholder="password">         
        <input type="submit" value="login" name="submit" >
	</form>    
                             </div>
                            </TD>
                            <TD background="images/but3.jpg" WIDTH=44 HEIGHT=32 border="0"></TD>
                        </TR>
                        <TR>
                            <TD background="images/bg10.jpg" WIDTH=123 HEIGHT=32></TD>
                            <TD background="images/but3.jpg" WIDTH=44 HEIGHT=32></TD>
                        </TR>
                        <TR>
                            <TD COLSPAN=2>
                                <IMG SRC="images/s5.jpg" WIDTH=167 HEIGHT=48 ALT=""></TD>
                        </TR>
              </TABLE>
              </TD>
                <TD>
                  <TABLE BORDER=0 CELLPADDING=0 CELLSPACING=0 width="1300">
                        <TR>
                            <TD WIDTH=454 HEIGHT=171><img src="images/f_m.jpg"></TD>
                            <TD width="846" background="images/bg_tile_1.gif" class="bgtop"></TD>
                        </TR>                      
                        <TR>
                            <TD background="images/bg11.gif" HEIGHT=19 colspan="2">
                                <div style="padding-left:35;padding-top:3;color:E0724A" class="tah11"></div>		</TD>
                        </TR>
                        <TR>
                            <TD HEIGHT=100% style="padding-left:35;padding-top:3;padding-bottom:3;padding-right:3;" colspan="2"><?php include 'page.php'; ?></TD>
                        </TR>
                        <TR>
                            <TD colspan="3">
                                <IMG SRC="images/s6.gif" WIDTH=100% HEIGHT=16 ALT=""></TD>
                        </TR>
                    </TABLE>
                </TD>
            </TR>
            <TR>
                <TD height="100%" colspan="4">&nbsp;</TD>
            </TR>
            <TR>
                <TD colspan="3">
                    <TABLE WIDTH=1626 BORDER=0 CELLPADDING=0 CELLSPACING=0>
<TR>
                            <TD width="326"><IMG SRC="images/s7.gif" WIDTH=326 HEIGHT=48 ALT=""></TD>
                            <TD background="images/bg16.gif" WIDTH=935 HEIGHT=48>
<div style="padding-top:12;color:A8A8A8" class="tah11">
                                    Teknik Informatika<Br>
                                    by Muhammad Nasrullah<strong>UAS</strong>.
                              </div>                                                                
          </TD>                                                
          <TD background="images/bg16.gif" width="365">         
          <div class="bubblewrap">
<a href="#"><img src="images/stumbleupon.png" 
title="Add to Stumbleupon" /></a>
<a href="#"><img 
src="images/facebook.png" title="Add to Facebook" 
/></a>
<a href="#"><img 
src="images/digg.png" title="Add to Digg" /></a>
<a href="#"><img 
src="images/twitter.png" title="Add to Twitter" 
/></a>
<a href="mailto:info@zakatonline.com"><img 
src="images/rss.png" title="Kirim email ke kami" /></a>
</div>
          </TD>
                      </TR>                      
                  </TABLE>                                          
                  <div style="padding-top:12;color:A8A8A8" class="tah11">
   	          </TD>
                <TD width="100%" background="images/bg_tile_2.gif">&nbsp;</TD>
            </TR>
        </TABLE>
        <!-- End ImageReady Slices -->
        <map name="Map2">
            <area shape="circle" coords="29,12,29" href="proses_login.php">
        </map>
</BODY>
</HTML>