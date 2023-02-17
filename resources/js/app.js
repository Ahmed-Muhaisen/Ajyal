import './bootstrap';

require('./bootstrap')
Echo.private('App.Models.User.'+userId)
    .notification((notification) => {
        console.log(notification.data);
    });
