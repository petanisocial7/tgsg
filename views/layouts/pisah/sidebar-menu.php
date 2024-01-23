<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

    <div class="menu_section">
        <h3>Daftar Menu</h3>
        <?=
        \yiister\gentelella\widgets\Menu::widget(
            [
                "items" => [
                    ["label" => "Home", "url" => "index.html", "icon" => "home"],
                    ["label" => "Media", "url" => ["site/media"], "icon" => "bookmark"],
                    ["label" => "Pelanggan", "url" => ["pelanggan/index"], "icon" => "user"],
                    ["label" => "Kendaraan Pelanggan", "url" => ["kendaraan-pelanggan/index"], "icon" => "car"],
                    ["label" => "Repaint", "url" => ["repaint/index"], "icon" => "paint-brush"],
                    ["label" => "Carbon", "url" => ["carbon/index"], "icon" => "codepen"],
                    ["label" => "Rincian Jasa", "url" => ["rincian-jasa/index"], "icon" => "info"],
                    // [
                    //     "label" => "Widgets",
                    //     "icon" => "th",
                    //     "url" => "#",
                    //     "items" => [
                    //         ["label" => "Menu", "url" => ["site/menu"]],
                    //         ["label" => "Panel", "url" => ["site/panel"]],
                    //     ],
                    // ],
                    // [
                    //     "label" => "Badges",
                    //     "url" => "#",
                    //     "icon" => "table",
                    //     "items" => [
                    //         [
                    //             "label" => "Default",
                    //             "url" => "#",
                    //             "badge" => "123",
                    //         ],
                    //         [
                    //             "label" => "Success",
                    //             "url" => "#",
                    //             "badge" => "new",
                    //             "badgeOptions" => ["class" => "label-success"],
                    //         ],
                    //         [
                    //             "label" => "Danger",
                    //             "url" => "#",
                    //             "badge" => "!",
                    //             "badgeOptions" => ["class" => "label-danger"],
                    //         ],
                    //     ],
                    // ],
                    // [
                    //     "label" => "Multilevel",
                    //     "url" => "#",
                    //     "icon" => "table",
                    //     "items" => [
                    //         [
                    //             "label" => "Second level 1",
                    //             "url" => "#",
                    //         ],
                    //         [
                    //             "label" => "Second level 2",
                    //             "url" => "#",
                    //             "items" => [
                    //                 [
                    //                     "label" => "Third level 1",
                    //                     "url" => "#",
                    //                 ],
                    //                 [
                    //                     "label" => "Third level 2",
                    //                     "url" => "#",
                    //                 ],
                    //             ],
                    //         ],
                    //     ],
                    // ],
                ],
            ]
        )
        ?>
    </div>

</div>