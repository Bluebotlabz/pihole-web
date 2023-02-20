<?php
/*
*    Pi-hole: A black hole for Internet advertisements
*    (c) 2017 Pi-hole, LLC (https://pi-hole.net)
*    Network-wide ad blocking via your own hardware.
*
*    This file is copyright under the latest version of the EUPL.
*    Please see LICENSE file for your rights under this license.
*/

require 'scripts/pi-hole/php/header_authenticated.php';
?>
<div class="row">
    <div class="col-md-12">
        <div class="box box-warning">
            <div class="box-header with-border">
                <h3 class="box-title"><code>tail -F <span id="filename">...</span></code></h3>
                <div class="pull-right">
                    <button class="btn btn-success" id="live-feed">
                        <span id="title">Live</span>&nbsp;&nbsp;
                        <i id="feed-icon" class="fa-solid fa-fw fa-play fa-fade"></i>
                    </button>
                </div>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <pre id="output" class="pre pre-scrollable"></pre>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo fileversion('scripts/pi-hole/js/taillog.js'); ?>"></script>

<?php
require 'scripts/pi-hole/php/footer.php';
?>
