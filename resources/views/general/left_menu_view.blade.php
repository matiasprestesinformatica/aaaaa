<div id="leftmenu">
    <script language="JavaScript">
        function f(target_url, win_name) {
            var new_win = window.open(target_url, win_name, 'resizable=yes,scrollbars=yes,menubar=no,toolbar=no,width=550,height=280,top=0,left=0');
            new_win.focus();
        }
    </script>
    <center>
        <div id="menu">
            <p>
                <NOBR>
                    {{ $lm_players }} <strong>{!! $user_name !!}</strong>
                </NOBR>
            </p>
            <table width="100%">
                <tr>
                    <td>
                        <img src="{{ $dpath }}menu/ogame-produktion.jpg" width="100%"/>
                    </td>
                </tr>
                {!! $menu_block1 !!}
                <tr>
                    <td>
                        <img src="{{ $dpath }}menu/info-help.jpg" width="100%" height="19">
                    </td>
                </tr>
                {!! $menu_block2 !!}
                <tr>
                    <td>
                        <img src="{{ $dpath }}menu/user-menu.jpg" width="100%" height="35">
                    </td>
                </tr>
                {!! $menu_block3 !!}
                {!! $admin_link !!}
                <tr>
                    <td>
                        <img src="{{ $dpath }}menu/info-help.jpg" width="100%" height="19">
                    </td>
                </tr>
            </table>
        </div>
    </center>
</div>
<!-- END LEFTMENU -->