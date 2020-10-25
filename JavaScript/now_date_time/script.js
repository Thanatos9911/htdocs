var now_time = function() {
    var hour = new Date().getHours();
    var min = new Date().getMinutes();
    var sec = new Date().getSeconds();
    var day = new Date().getUTCDate();
    var month = new Date().getUTCMonth();
    var year = new Date().getFullYear();
    var m_list = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "Octorber", "December"]
    if (sec < 10) {
        sec = '0'+sec;
    }
    if (min < 10) {
        min = '0'+min;
    }
    if (hour < 10) {
        hour = '0'+hour;
    }
    if (day === 1 || day === 12 || day === 21 || day === 31) {
        day = day + 'st';
    }
    else if (day === 2 || day === 12 || day === 22) {
        day = day + 'nd';
    }
    else if (day === 3 || day === 13 || day === 23) {
        day = day + 'rd';
    }
    else {
        day = day + 'th';
    }

    document.getElementById('hour1').textContent = hour;
    document.getElementById('min1').textContent = min;
    document.getElementById('sec1').textContent = sec;
    document.getElementById('day').textContent = day;
    document.getElementById('month').textContent = m_list[month];
    document.getElementById('year').textContent = year;
    document.getElementById('hour2').textContent = hour;
    document.getElementById('min2').textContent = min;
    document.getElementById('sec2').textContent = sec;
    refresh();
}

var refresh = function() {
    setTimeout(now_time, 50)
}

now_time();
