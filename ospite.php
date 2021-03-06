<?php
######################################################################
# Wi-Fi-voucher-o-matic - Wi-Fi voucher manager
# Copyright (C) 2017 Valerio Bozzolan, Ivan Bertotto, ITIS Avogadro
#
# This program is free software: you can redistribute it and/or modify
# it under the terms of the GNU General Public License as published by
# the Free Software Foundation, either version 3 of the License, or
# (at your option) any later version.
# This program is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.See the
# GNU General Public License for more details.
#
# You should have received a copy of the GNU General Public License
# along with this program.If not, see <http://www.gnu.org/licenses/>.
######################################################################

require 'load.php';

Header::spawn('ospite');

?>

<section class="mbr-section article mbr-parallax-background mbr-after-navbar" id="msg-box8-w" style="background-image: url(<?php echo STATIC_ROOT ?>/images/mbr-2-2000x1334.jpg); padding-top: 120px; padding-bottom: 120px;">

    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(34, 34, 34);">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-xs-center">
                <h3 class="mbr-section-title display-2">Richiesta account ospite</h3>
                <div class="lead"><h4>sei ore, un giga</h4></div>
                
            </div>
        </div>
    </div>

</section>

<section class="mbr-section article mbr-section__container" id="content1-x" style="background-color: rgb(255, 255, 255); padding-top: 20px; padding-bottom: 20px;">

    <div class="container">
        <div class="row">
            <div class="col-xs-12 lead"><p>Potete chiedere da subito le vostre credenziali personalizzate per navigare per sei ore durante la vostra permanenza in Istituto.</p><p>Buona navigazione !</p></div>
        </div>
    </div>

</section>

<section class="mbr-section" id="form1-y" style="background-color: rgb(255, 255, 255); padding-top: 40px; padding-bottom: 120px;">
    
    <div class="mbr-section mbr-section__container mbr-section__container--middle">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-xs-center">
                    <h3 class="mbr-section-title display-2">Richiesta account ospite</h3>
                    <small class="mbr-section-subtitle">Il codice di attivazione lo trovate in centralino&nbsp;</small>
                </div>
            </div>
        </div>
    </div>
    <div class="mbr-section mbr-section-nopadding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-lg-10 col-lg-offset-1" data-form-type="formoid">


                    <div data-form-alert="true">
                        <div hidden="" data-form-alert-success="true" class="alert alert-form alert-success text-xs-center">Thanks for filling out form!</div>
                    </div>


                    <form action="<?php echo get_menu_entry('form_post')->url ?>" method="post" data-form-title="Richiesta account ospite">

                        <input type="hidden" value="X3Eul1b7/tQine3/yVILjd/CkAO7XPZ/+ik4rPvnzxPRHl9ZwYJZfEuiRbeVva4jRS533Smmd0kCxPhpra8YunRIT4RdE7X8iYMRMjCRv4cirKvc3qokKWcXkD8LdiLZ" data-form-email="true">

                        <div class="row row-sm-offset">

                            <div class="col-xs-12 col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="form1-y-name">Name<span class="form-asterisk">*</span></label>
                                    <input type="text" class="form-control" name="name" required="" data-form-field="Name" id="form1-y-name">
                                </div>
                            </div>

                            <div class="col-xs-12 col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="form1-y-email">Email<span class="form-asterisk">*</span></label>
                                    <input type="email" class="form-control" name="email" required="" data-form-field="Email" id="form1-y-email">
                                </div>
                            </div>

                            <div class="col-xs-12 col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="form1-y-phone">Phone</label>
                                    <input type="tel" class="form-control" name="phone" data-form-field="Phone" id="form1-y-phone">
                                </div>
                            </div>

                        </div>

                        <div class="form-group">
                            <label class="form-control-label" for="form1-y-message">Message</label>
                            <textarea class="form-control" name="message" rows="7" data-form-field="Message" id="form1-y-message"></textarea>
                        </div>

                        <div><button type="submit" class="btn btn-primary">CONTACT US</button></div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
Footer::spawn();
