<?php

class sweepTemp extends sweepTemp_parent
{
    public function render()
    {
        return parent::render();
    }

    public function clearTemp()
    {
        $tempDir = oxRegistry::getConfig()->getConfigParam('sCompileDir');
        $rdi = new RecursiveDirectoryIterator($tempDir);
        $rii = new RecursiveIteratorIterator($rdi);
        foreach ($rii as $entry) {
            if (!$entry->isFile()) {
                continue;
            }
            unlink($entry->getRealPath());
        }
        echo '&nbsp;<span style="color: #7FFF00">✔</span><span></span> <sup>' . date("H:i:s") . '</sup>';
    }
}
