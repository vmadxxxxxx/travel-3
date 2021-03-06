<!-- BEGIN: Navigation -->
 <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav nav-center">

      	<!-- Trang chu -->
        <li>
  			<a href="index.php?lang=<?php echo $lang ?>"><?php echo $lang =='en'? 'Home' : 'Trang chủ' ?></a>
        </li>
  
        <!-- Du lich gia tot-->
        <li class="dropdown dropdown-parrent">
          <a href="index.php?controller=tour&amp;lang=<?php echo $lang  ?>" class="dropdown-toggle disabled" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo $lang =='en' ? 'Tourist good price' : 'Du lịch giá tốt' ?></a>
          <ul class="dropdown-menu dropdown-menu-parrent" role="menu">
            <li class="dropdown dropdown-child dropdown-submenu"><a href="index.php?lang=<?php echo $lang ?>&amp;controller=tour&amp;action=country&amp;tour_country_code=1" class="dropdown-toggle disabled" data-toggle="dropdown"><?php echo $lang =='en'? 'Domestic tourism' : 'Du lịch trong nước' ?></a>
                <ul class="dropdown-menu dropdown-menu-child role='menu'">
                <?php foreach($tour_region as $key):?>
                <?php if($key['tour_country_code'] =='1') :?>
                  <li><a href="index.php?lang=<?php echo $lang ?>&amp;controller=tour&amp;action=region&amp;tour_region_code=<?php echo $key['tour_region_code'] ?>"><?php echo $key['tour_region_name'] ?></a></li>
                <?php endif ?>
                <?php endforeach ?>
                </ul>
            </li>
            <li class="dropdown dropdown-child dropdown-submenu">
              <a href="index.php?lang=<?php echo $lang ?>&amp;controller=tour&amp;action=country&amp;tour_country_code=2"  class="dropdown-toggle disabled" data-toggle="dropdown"><?php echo $lang =='en'? 'Abroad tourism' : 'Du lịch nước ngoài' ?></a>
                <ul class="dropdown-menu dropdown-menu-child role='menu'">
                <?php foreach($tour_region as $key):?>
                <?php if($key['tour_country_code'] =='2') :?>
                  <li><a href="index.php?lang=<?php echo $lang ?>&amp;controller=tour&amp;action=region&amp;tour_region_code=<?php echo $key['tour_region_code'] ?>"><?php echo $key['tour_region_name'] ?></a></li>
                <?php endif ?>
                <?php endforeach ?>
                </ul>
            </li>
          </ul>
        </li>

        <!-- dich vu visa, ho chieu -->
        <li class="dropdown dropdown-parrent">
          <a href="index.php?controller=visa&amp;action=servicevisa&amp;lang=<?php echo $lang  ?>" class="dropdown-toggle disabled" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo $lang =='en' ? 'Visa - Passport': 'Visa - hộ chiếu' ?></a>
          <ul class="dropdown-menu dropdown-menu-parrent" role="menu">
            <li class="dropdown dropdown-child dropdown-submenu"><a href="index.php?lang=<?php echo $lang ?>&amp;controller=visa&amp;action=servicevisa&amp;passport_visa_code=10" class="dropdown-toggle disabled" data-toggle="dropdown"><?php echo $lang =='en'? 'Viet Name Visa' : 'Visa Việt Nam' ?></a>
                <ul class="dropdown-menu dropdown-menu-child role='menu'">
                <?php $visa = get_all_record('passport_visa_offers','passport_visa_code','10'); ?>
                <?php foreach ($visa as $key => $value):?>
                  <li><a href="index.php?lang=<?php echo $lang ?>&amp;controller=visa&amp;action=servicevisa&amp;passport_visa_code=10&amp;pass_offer=<?php echo $value['passport_visa_offer_code'];?>"><?php echo $value['title']; ?></a></li>
                <?php endforeach ?>
                </ul>
            </li>
            <li class="dropdown dropdown-child dropdown-submenu"><a href="index.php?lang=<?php echo $lang ?>&amp;controller=visa&amp;action=servicevisa&amp;passport_visa_code=1" class="dropdown-toggle disabled" data-toggle="dropdown"><?php echo $lang =='en'? 'Asia Visa' : 'Visa Châu Á' ?></a>
                <ul class="dropdown-menu dropdown-menu-child role='menu'">
                <?php foreach ($visa1 as $key => $value):?>
                  <li><a href="index.php?lang=<?php echo $lang ?>&amp;controller=visa&amp;action=servicevisa&amp;passport_visa_code=1&amp;pass_offer=<?php echo $value['passport_visa_offer_code'];?>"><?php echo $value['title']; ?></a></li>
                <?php endforeach ?>
                </ul>
            </li>
            <li class="dropdown dropdown-child dropdown-submenu"><a href="index.php?lang=<?php echo $lang ?>&amp;controller=visa&amp;action=servicevisa&amp;passport_visa_code=2" class="dropdown-toggle disabled" data-toggle="dropdown"><?php echo $lang =='en'? 'Europe Visa' : 'Visa Châu Âu' ?></a>
                <ul class="dropdown-menu dropdown-menu-child role='menu'">
                <?php foreach ($visa2 as $key => $value):?>
                  <li><a href="index.php?lang=<?php echo $lang ?>&amp;controller=visa&amp;action=servicevisa&amp;passport_visa_code=2&amp;pass_offer=<?php echo $value['passport_visa_offer_code'];?>"><?php echo $value['title']; ?></a></li>
                <?php endforeach ?>
                </ul>
            </li>
            <li class="dropdown dropdown-child dropdown-submenu"><a href="index.php?lang=<?php echo $lang ?>&amp;controller=visa&amp;action=servicevisa&amp;passport_visa_code=5" class="dropdown-toggle disabled" data-toggle="dropdown"><?php echo $lang =='en'? 'Visa Châu Úc' : 'Visa Châu Úc' ?></a>
                <ul class="dropdown-menu dropdown-menu-child role='menu'">
                <?php foreach ($visa5 as $key => $value):?>
                  <li><a href="index.php?lang=<?php echo $lang ?>&amp;controller=visa&amp;action=servicevisa&amp;passport_visa_code=5&amp;pass_offer=<?php echo $value['passport_visa_offer_code'];?>"><?php echo $value['title']; ?></a></li>
                <?php endforeach ?>
                </ul>
            </li>
            <li class="dropdown dropdown-child dropdown-submenu"><a href="index.php?lang=<?php echo $lang ?>&amp;controller=visa&amp;action=servicevisa&amp;passport_visa_code=6" class="dropdown-toggle disabled" data-toggle="dropdown"><?php echo $lang =='en'? 'Visa Châu Phi' : 'Visa Châu Phi' ?></a>
                <ul class="dropdown-menu dropdown-menu-child role='menu'">
                <?php foreach ($visa6 as $key => $value):?>
                  <li><a href="index.php?lang=<?php echo $lang ?>&amp;controller=visa&amp;action=servicevisa&amp;passport_visa_code=6&amp;pass_offer=<?php echo $value['passport_visa_offer_code'];?>"><?php echo $value['title']; ?></a></li>
                <?php endforeach ?>
                </ul>
            </li>
            <li class="dropdown dropdown-child dropdown-submenu"><a href="index.php?lang=<?php echo $lang ?>&amp;controller=visa&amp;action=servicevisa&amp;passport_visa_code=7" class="dropdown-toggle disabled" data-toggle="dropdown"><?php echo $lang =='en'? 'Visa Châu Mĩ' : 'Visa Châu Mĩ' ?></a>
                <ul class="dropdown-menu dropdown-menu-child role='menu'">
                <?php foreach ($visa7 as $key => $value):?>
                  <li><a href="index.php?lang=<?php echo $lang ?>&amp;controller=visa&amp;action=servicevisa&amp;passport_visa_code=7&amp;pass_offer=<?php echo $value['passport_visa_offer_code'];?>"><?php echo $value['title']; ?></a></li>
                <?php endforeach ?>
                </ul>
            </li>
            <li class="dropdown dropdown-child dropdown-submenu"><a href="index.php?lang=<?php echo $lang ?>&amp;controller=visa&amp;action=servicevisa&amp;passport_visa_code=8" class="dropdown-toggle disabled" data-toggle="dropdown"><?php echo $lang =='en'? 'Visa Trung Đông' : 'Visa Trung Đông' ?></a>
                <ul class="dropdown-menu dropdown-menu-child role='menu'">
                <?php foreach ($visa8 as $key => $value):?>
                  <li><a href="index.php?lang=<?php echo $lang ?>&amp;controller=visa&amp;action=servicevisa&amp;passport_visa_code=8&amp;pass_offer=<?php echo $value['passport_visa_offer_code'];?>"><?php echo $value['title']; ?></a></li>
                <?php endforeach ?>
                </ul>
            </li>
            <li class="dropdown dropdown-child dropdown-submenu"><a href="index.php?lang=<?php echo $lang ?>&amp;controller=visa&amp;action=servicevisa&amp;passport_visa_code=9" class="dropdown-toggle disabled" data-toggle="dropdown"><?php echo $lang =='en'? 'Dịch vụ làm visa nhanh' : 'Dịch vụ làm visa nhanh' ?></a>
                <ul class="dropdown-menu dropdown-menu-child role='menu'">
                <?php foreach ($visa9 as $key => $value):?>
                  <li><a href="index.php?lang=<?php echo $lang ?>&amp;controller=visa&amp;action=servicevisa&amp;passport_visa_code=9&amp;pass_offer=<?php echo $value['passport_visa_offer_code'];?>"><?php echo $value['title']; ?></a></li>
                <?php endforeach ?>
                </ul>
            </li>
          </ul>
        </li>
        <!-- Du lich Xe-->
        <li class="dropdown dropdown-parrent">
          <a href="index.php?controller=service_car" ><?php echo $lang =='en' ? 'Car service' : 'Dịch vụ Xe' ?></a>
      <ul class="dropdown-menu dropdown-menu-parrent" role="menu">
        <?php if(isset($area)){?>
          <?php 
           foreach($area as $value):
          ?>
          <?php echo "<li><a href='index.php?controller=service_car&action=detail_service&code=".$value['msdd']."'>".$value['tendiadiem']."</a></li>";?>
          <?php endforeach ?>
        <?php }?>
          </ul>
        </li>
        <!-- Dich vi xuat khau lao dong -->
        
        <li class="dropdown dropdown-parrent">
          <a href="index.php?controller=labor&amp;lang=<?php echo $lang  ?>" class="dropdown-toggle disabled" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo $lang =='en' ? 'Labor' : 'Dịch vụ xuất khẩu lao động' ?></a>
          <ul class="dropdown-menu dropdown-menu-parrent" role="menu">
            <?php $labor1=get_all('labor');?>
            <?php foreach($labor1 as $key):?>
            <li class="dropdown dropdown-child dropdown-submenu"><a href="index.php?lang=<?php echo $lang ?>&amp;controller=labor&amp;labor_id=<?php echo $key['labor_id']?>" class="dropdown-toggle disabled" data-toggle="dropdown"><?php echo $key['labor_name'] ?></a>
                <ul class="dropdown-menu dropdown-menu-child role='menu'">
                <?php $labor2=get_all_record('labor_content','labor_id',$key['labor_id']); ?>
                <?php foreach($labor2 as $key2):?>
                  <li><a href="index.php?lang=<?php echo $lang ?>&amp;controller=labor&amp;labor_id=<?php echo $key2['labor_id']?>&amp;labor_content_id=<?php echo $key2['labor_content_id'] ?>"><?php echo $key2['title'] ?></a></li>
                <?php endforeach ;?>
                </ul>
            </li>
            <?php endforeach;?>
          </ul>
        </li>          
        <!-- Tu van du hoc-->
        <li class="dropdown dropdown-parrent">
          <a href="index.php?controller=abroad&amp;lang=<?php echo $lang  ?>" class="dropdown-toggle disabled" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo $lang =='en' ? 'Abroad' : 'Tư vấn Du Học' ?></a>
          <ul class="dropdown-menu dropdown-menu-parrent" role="menu">
            <?php $abroad1=get_all('abroads');?>
            <?php foreach($abroad1 as $key):?>
            <li class="dropdown dropdown-child dropdown-submenu"><a href="index.php?lang=<?php echo $lang ?>&amp;controller=abroad&amp;abroad_id=<?php echo $key['abroad_id']?>" class="dropdown-toggle disabled" data-toggle="dropdown"><?php echo $key['abroad_name'] ?></a>
                <ul class="dropdown-menu dropdown-menu-child role='menu'">
                <?php $abroad2=get_all_record('abroad_offers','abroad_id',$key['abroad_id']); ?>
                <?php foreach($abroad2 as $key2):?>
                  <li><a href="index.php?lang=<?php echo $lang ?>&amp;controller=abroad&amp;abroad_id=<?php echo $key2['abroad_id']?>&amp;abroad_offer_id=<?php echo $key2['abroad_offer_id'] ?>"><?php echo $key2['title'] ?></a></li>
                <?php endforeach ;?>
                </ul>
            </li>
            <?php endforeach;?>
          </ul>
        </li> 

        <!-- Ve may bay -->
        <li class="dropdown dropdown-parrent">
          <a href="index.php?controller=ticket_plane&amp;lang=<?php echo $lang  ?>" class="dropdown-toggle disabled" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo $lang =='en' ? 'Ticket Plane' : 'Vé máy bay' ?></a>
          <ul class="dropdown-menu dropdown-menu-parrent" role="menu">
            <?php $ticket_plane1=get_all('ticket_plane');?>
            <?php foreach($ticket_plane1 as $key):?>
            <li class="dropdown dropdown-child dropdown-submenu"><a href="index.php?lang=<?php echo $lang ?>&amp;controller=ticket_plane&amp;ticket_plane_id=<?php echo $key['ticket_plane_id']?>" class="dropdown-toggle disabled" data-toggle="dropdown"><?php echo $key['ticket_plane_name'] ?></a>
                <ul class="dropdown-menu dropdown-menu-child role='menu'">
                <?php $ticket_plane2=get_all_record('ticket_plane_content','ticket_plane_id',$key['ticket_plane_id']); ?>
                <?php foreach($ticket_plane2 as $key2):?>
                  <li><a href="index.php?lang=<?php echo $lang ?>&amp;controller=ticket_plane&amp;ticket_plane_id=<?php echo $key2['ticket_plane_id']?>&amp;ticket_plane_content_id=<?php echo $key2['ticket_plane_content_id'] ?>"><?php echo $key2['ticket_plane_title'] ?></a></li>
                <?php endforeach ;?>
                </ul>
            </li>
            <?php endforeach;?>
          </ul>
        </li> 

       	<!-- Tin tuc - su kien -->
        <li class="dropdown dropdown-parrent">
          <a href="index.php?lang=<?php echo $lang ?>&amp;controller=news" class="dropdown-toggle disabled" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo $lang =='en'? 'News - Events' : 'Tin tức, sự kiện' ?></a>
          <ul class="dropdown-menu dropdown-menu-parrent" role="menu">
              <?php foreach($news as $value): ?>
                <li><a href="index.php?lang=<?php echo $lang ?>&amp;controller=news&amp;news_event_code=<?php echo $value['news_event_code'] ?>"><?php echo $value['new_event_name'] ?></a></li>
              <?php endforeach ?>
          </ul>
        </li>
        <!-- Lien he -->
        <li>
  			<a href="index.php?controller=contact&amp;lang=<?php echo $lang ?>"><?php echo $lang =='en'? 'Contact':  'Liên hệ' ?></a>
        </li>


      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!-- END: Navigation -->