myNoti = {
    misc: {
        navbar_menu_visible: 0
    },

    showNotification: function(from, align,noteOptions) {
        color = 'primary';

        $.notify({
            icon: "ni ni-bell-55",
            message: noteOptions.body,
            url:noteOptions.click_action,
            target:"_self"

        }, {
            type: color,
            timer: 1000000000,
            placement: {
                from: from,
                align: align
            }
        });
    }


};