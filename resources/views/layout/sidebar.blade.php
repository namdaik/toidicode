 <aside id="sidebar" class="sidebar right">
            <div id="" class="" style="margin-bottom: 30px; overflow-x: : hidden;">
	<h4 class="widget-title">QC</h4>

	<img src="upload/qc.png">
	</div>            <div id="" class="widget widget_text elp-widget">
    <h4 class="widget-title">Bài viết mới</h4>
    <ul>
        @foreach($tintucnew as $tin)
                    <li><a href="{{$tin->tieudekhongdau}}/{{$tin->id}}" title="{{$tin->tieude}}" >{{$tin->tieude}}</a></li>  
        @endforeach                  
            </ul>
</div>    
    
    <div id="" class="widget widget_text elp-widget">
    <h4 class="widget-title">Danh mục</h4>
    <ul>
        @foreach($theloai as $tl)
                    <li><a href="theloai/{{$tl->id}}" title="{{$tl->ten}}" >{{$tl->ten}}</a></li>  
        @endforeach                  
            </ul>
</div> 
        <div id="email-subscribers-2" class="widget widget_text elp-widget"><h5 class="widget-title">ĐĂNG KÝ NHẬN BÀI QUA EMAIL</h5>
    <script src="https://toidicode.com/public/ajax/ajaxmail.min.js?v=1.1"></script>
    <div>
     <div class="es_msg"><font color='red' id="es_msg"></font></div>
     <div class="es_msgc"><font color='green' id="es_msgc"></font></div>
     <div class="es_lablebox">Email *</div>
     <div class="es_textbox">
        <form action="javascript:void(0)" onsubmit="subMail('6997a19e46d4df5adbb6f83aaa0bfcd2')" autocomplete="off">
            <input class="es_textbox_class" type="email" name="email_feild" id="email_feild" onkeypress="if(event.keyCode==13) submail()" placeholder="Mail..." minlength="6" maxlength="30" required="">
        </div>
        <div class="es_button" style="margin-top: 5px;">
            <input class="es_textbox_button" name="es_txt_button" id="es_txt_button" value="Subscribe" type="submit">
       </form>
   </div>
</div>
</div>           
<div id="" class="">
	<h4 class="widget-title">FANPAGE</h4>
	<div class="fb-page" data-href="https://www.facebook.com/toidicode/" data-tabs="false" data-width="300" data-small-header="false" data-adapt-container-width="false" data-hide-cover="false" data-show-facepile="true">
		<blockquote cite="https://www.facebook.com/toidicode/" class="fb-xfbml-parse-ignore">
			<a href="https://www.facebook.com/toidicode/">Toidicode.com</a>
		</blockquote>
	</div>
</div>            <!-- ads -->
<div id="" class="widget widget_text elp-widget vce-sticky">
    <img src="https://tpc.googlesyndication.com/simgad/12757739367489837487" border="0" width="300" height="600" alt="" class="img_ad">
</div>        </aside>