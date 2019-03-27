<?php

class sweepTemp extends sweepTemp_parent
{
    public function render()
    {
        $renderResult = parent::render();
        return ('header.tpl' === $renderResult) ? 're4header.tpl' : $renderResult;
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
