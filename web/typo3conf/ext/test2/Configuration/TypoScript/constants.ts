
plugin.tx_test2_information {
    view {
        # cat=plugin.tx_test2_information/file; type=string; label=Path to template root (FE)
        templateRootPath = EXT:test2/Resources/Private/Templates/
        # cat=plugin.tx_test2_information/file; type=string; label=Path to template partials (FE)
        partialRootPath = EXT:test2/Resources/Private/Partials/
        # cat=plugin.tx_test2_information/file; type=string; label=Path to template layouts (FE)
        layoutRootPath = EXT:test2/Resources/Private/Layouts/
    }
    persistence {
        # cat=plugin.tx_test2_information//a; type=string; label=Default storage PID
        storagePid =
    }
}
