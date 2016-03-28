<?php
return array(
    // set your paypal credential
    'client_id' => 'AZd_22XxRkwSIWTV3VE4dgvRkb6mNorB9iAU2BC3Bhs1uBVBlO20GVaN_rtUFE63AAX8B6UkHZ7hrZqD',
    'secret' => 'EB0mrq2ha1DMJL0fXbvbi5fuFdLC_GU09aJl3PWWAzXwqVLa2oL-Q53rh0WSUjADDT_hl_Lu6X87SG30',

    /**
     * SDK configuration 
     */
    'settings' => array(
        /**
         * Available option 'sandbox' or 'live'
         */
        'mode' => 'sandbox',

        /**
         * Specify the max request time in seconds
         */
        'http.ConnectionTimeOut' => 30,

        /**
         * Whether want to log to a file
         */
        'log.LogEnabled' => true,

        /**
         * Specify the file that want to write on
         */
        'log.FileName' => storage_path() . '/logs/paypal.log',

        /**
         * Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
         *
         * Logging is most verbose in the 'FINE' level and decreases as you
         * proceed towards ERROR
         */
        'log.LogLevel' => 'FINE'
    ),
);