<div class="kalender">
    <div class="menue">
        <span class="zeit buttons">
            <a href="<?php echo $daten['tag_datum_zurueck']; ?>" class="vergangenheit">&#9664;</a>
            <a href="<?php echo $daten['tag_datum_aktuell']; ?>" class="heute"><?php _e('Heute', 'rrze-calendar'); ?></a>
            <a href="<?php echo $daten['tag_datum_vor']; ?>" class="zukunft">&#9654;</a>
        </span>

        <span class="titel"><?php echo $daten['monat']; ?></span>

        <span class="intervall">
            <a class="aktion" href="#">&#9776;</a>
            <div class="buttons">
                <span class="tag aktiv"><?php _e('Tag', 'rrze-calendar'); ?></span>
                <a href="<?php echo $daten['woche_datum']; ?>" class="woche"><?php _e('Woche', 'rrze-calendar'); ?></a>
                <a href="<?php echo $daten['monat_datum']; ?>" class="monat"><?php _e('Monat', 'rrze-calendar'); ?></a>
                <a href="<?php echo $daten['liste']; ?>" class="liste"><?php _e('Liste', 'rrze-calendar'); ?></a>
                <?php if ($daten['abonnement_url']): ?>
                <a href="<?php echo $daten['abonnement_url']; ?>" class="tag"><?php _e('Abonnement', 'rrze-calendar'); ?></a>
                <?php endif; ?>                
            </div>
        </span>

    </div>

    <div class="inhalt">
        <div class="tagesansicht" style="height: <?php echo get_option('rrze_calendar')['calendar_height'];?>px">

            <div class="kopfzeile clear-fix">
                <div class="<?php if (!empty($daten['tag']['wochenende'])): ?>wochenende <?php endif; ?><?php if (!empty($daten['tag']['sonntag'])): ?>sonntag <?php endif; ?>">
                    <span class="tag"><?php echo $daten['tag']['wochentag_anfang']; ?><span class="lang"><?php echo $daten['tag']['wochentag_ende']; ?>, </span></span> <span class="datum"><?php echo $daten['tag']['datum_kurz']; ?>. <?php echo $daten['tag']['monat']; ?></span>
                </div>
            </div>

            <div class="ganztagige clear-fix">
                <span class='header'><?php _e('Ganztägig', 'rrze-calendar'); ?></span>             
                <?php foreach ($daten['tag']['termine'] as $termin): ?>
                <?php if (!empty($termin['ganztagig'])): ?>
                <span class="tag" style="border-left:4px solid <?php echo $termin['farbe']; ?>">
                    <a href="<?php echo esc_attr(RRZE_Calendar::endpoint_url($termin['slug'])); ?>" class="termin ganztagig">
                        <span class="titel"><?php echo $termin['summary']; ?></span>
                    </a>
                </span>
                <?php else: ?>
                 
                <?php endif; ?>
                <?php endforeach; ?>
            </div>           
            <div class="tag-container clear-fix">
                <div class="stunden" >
                    <?php foreach ($daten['stunden'] as $stunde): ?>
                    <div class="stunde"><span class="icon-uhr">&#9719; </span><?php echo $stunde['stunde']; ?></div>
                    <?php endforeach; ?>
                </div>
                <div class="tag" style="height:100%;z-index: 10" data-anfang="<?php echo $daten['tag']['tag_anfang']; ?>">
                    <?php foreach ($daten['tag']['termine'] as $termin): ?>
                    <?php if (!empty($termin['nicht_ganztagig'])): ?>
                    
                    <?php 
                  // $darker= RRZE_Calendar::darken_color($termin['farbe'],3);
                    //echo   $darker;die;
                            ?>
               <!--     <a href="<?php echo esc_attr(RRZE_Calendar::endpoint_url($termin['slug'])); ?>" class="termin clear-fix" style="color:<?php echo RRZE_Calendar::calculateTextColor($termin['farbe']); ?>;background:<?php echo $termin['farbe']; ?>;border-left-color: <?php echo RRZE_Calendar::darken_color($termin['farbe'],2); ?>; height:<?php  echo $termin['duration']+($termin['duration']%59);?>px; top: <?php echo (($termin['start'])+60+($termin['start']%59)); ?>px; left: <?php echo $termin['left']; ?>%; width: <?php echo $termin['width']; ?>%;" data-start="<?php echo $termin['start']; ?>" data-dauer="<?php echo $termin['duration']; ?>" data-ende="<?php echo $termin['ende']; ?>" data-farbe="<?php echo $termin['farbe']; ?>">
                   -->   
                   
                   <?php 
                   
                           
                   if(isset($termin['multi_day_event'])){
                    
                       ?>
     
                              <a href="<?php echo esc_attr(RRZE_Calendar::endpoint_url($termin['slug'])); ?>" class="termin clear-fix" style="border-left-color: <?php echo $termin['farbe']; ?>; height:<?php  echo ($termin['duration']+($termin['duration']/120))+(($termin['start'])+($termin['start']/120));?>px; top:60px; left: <?php echo $termin['left']; ?>%; width: <?php echo $termin['width']; ?>%;" data-start="<?php echo $termin['start']; ?>" data-dauer="<?php echo $termin['duration']; ?>" data-ende="<?php echo $termin['ende']; ?>" data-farbe="<?php echo $termin['farbe']; ?>">

                   <?php
                   }else{
                   
                   ?>
                      <a href="<?php echo esc_attr(RRZE_Calendar::endpoint_url($termin['slug'])); ?>" class="termin clear-fix" style="border-left-color: <?php echo $termin['farbe']; ?>; height:<?php  echo $termin['duration']+($termin['duration']/120);?>px; top: <?php echo (($termin['start'])+60+($termin['start']/120)); ?>px; left: <?php echo $termin['left']; ?>%; width: <?php echo $termin['width']; ?>%;" data-start="<?php echo $termin['start']; ?>" data-dauer="<?php echo $termin['duration']; ?>" data-ende="<?php echo $termin['ende']; ?>" data-farbe="<?php echo $termin['farbe']; ?>">

                    <?php } ?>
                  
                         
                        <span class="permalink titip-default titip-top">
                            
                        <span class="titel"><?php echo $termin['summary']; ?></span>
                            
                        <span class="raum"><?php echo $termin['location']; ?></span>
                        <?php if (!empty($termin['ganztagig'])): ?>
                        <span class="zeit"><?php printf(__('%1$s bis %2$s', 'rrze-calendar'), $termin['datum_start'], $termin['datum_ende']); ?></span>
                        <?php else: ?>
                        <span class="zeit"><?php echo $termin['time']; ?></span>
                        <?php endif; ?>
                        
                        
                         <span class="titip-liste titip-content thick-border">
                                <strong><?php echo wordwrap($termin['summary'], 50, "<br>\n"); ?></strong>
                                <?php if (!empty($termin['location'])): ?>
                                <br><span><?php echo $termin['location']; ?></span>
                                <?php endif; ?>
                                <?php if (!empty($termin['time'])): ?>
                                <br> <?php if (!empty($termin['datum'])): ?><?php echo $termin['datum']; ?>, <?php endif; ?><?php printf(__("%s Uhr", 'rrze-calendar'), $termin['time']); ?>
                                <?php endif; ?>
                            </span>    
                        </span>
                        
                    </a>
          
                    <?php endif; ?>
                    <?php endforeach; ?></div>
            
            
            
            
            
            </div></div></div></div>