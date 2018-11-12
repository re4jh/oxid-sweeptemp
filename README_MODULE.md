<MODULE_NAME>
=============

<MODULE_DESCRIPTION>


Testing
-------

Mit dem bash script `run_module_tests.sh`. Werden die Test gestartet. Da jedes Module seine idividuelle Test Framework haben, 
sollten diese aufrufe im diesem Script hinterlegt werden.

Damit der nächste Entwickler nur `run_module_tests.sh` ausführen muss und oder automatische
continuous integration gestartet werden kann.

_Daher bitte die `run_module_tests.sh` anpassen_


Start Test:

    source/modules/<VENDOR>/<MODULE_NAME>/run_module_tests.sh
    
Mit den annotation @group kann man einzelne Test auswählen zum Testen

    source/modules/<VENDOR>/<MODULE_NAME>/run_module_tests.sh --group active
    
    /**
     * @group active
     */
    public function testMethode()
    {
    }
    

Change Log
----------
 - v0.0.0
