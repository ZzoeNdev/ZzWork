var pp = document.getElementById('pp');
var p = document.getElementById('p');
var m = document.getElementById('m');
var g = document.getElementById('g');
var gg = document.getElementById('gg');
var xl = document.getElementById('xl');




function clickSizeP(){

    var pp = document.getElementById('pp');
var p = document.getElementById('p');
var m = document.getElementById('m');
var g = document.getElementById('g');
var gg = document.getElementById('gg');
var xl = document.getElementById('xl');

    if(p.style.backgroundColor === 'transparent' ){
        p.style.backgroundColor = 'rgba(65, 65, 65, 1)';
        p.style.color = 'white';
    }

    if( pp.style.backgroundColor === 'rgba(65, 65, 65, 1)' & m.style.backgroundColor === 'rgba(65, 65, 65, 1)' & g.style.backgroundColor === 'rgba(65, 65, 65, 1)' & gg.style.backgroundColor === 'rgba(65, 65, 65, 1)' & xl.style.backgroundColor === 'rgba(65, 65, 65, 1)'){

        pp.style.backgroundColor = 'transparent';
        pp.style.color = 'black';
        m.style.backgroundColor = 'transparent';
        m.style.color = 'black';

        g.style.backgroundColor = 'transparent';
        g.style.color = 'black';

        gg.style.backgroundColor = 'transparent';
        gg.style.color = 'black';

        xl.style.backgroundColor = 'transparent';
        xl.style.color = 'black';
    }
}

function clickSizePP(){

    
    if(p.style.backgroundColor === 'rgba(65, 65, 65, 1)' || pp.style.backgroundColor === 'transparent' || m.style.backgroundColor === 'rgba(65, 65, 65, 1)' || g.style.backgroundColor === 'rgba(65, 65, 65, 1)' || gg.style.backgroundColor === 'rgba(65, 65, 65, 1)' || xl.style.backgroundColor === 'rgba(65, 65, 65, 1)'){

        p.style.backgroundColor = 'transparent';
        p.style.color = 'black';

        pp.style.backgroundColor = 'rgba(65, 65, 65, 1)';
        pp.style.color = 'white';

        m.style.backgroundColor = 'transparent';
        m.style.color = 'black';

        g.style.backgroundColor = 'transparent';
        g.style.color = 'black';

        gg.style.backgroundColor = 'transparent';
        gg.style.color = 'black';

        xl.style.backgroundColor = 'transparent';
        xl.style.color = 'black';
    }else{
        p.style.backgroundColor = 'transparent';
        p.style.color = 'black';
    }
}

function clickSizeM(){
    if(p.style.backgroundColor === 'rgba(65, 65, 65, 1)' || pp.style.backgroundColor === 'rgba(65, 65, 65, 1)' || m.style.backgroundColor === 'transparent' || g.style.backgroundColor === 'rgba(65, 65, 65, 1)' || gg.style.backgroundColor === 'rgba(65, 65, 65, 1)' || xl.style.backgroundColor === 'rgba(65, 65, 65, 1)'){

        p.style.backgroundColor = 'transparent';
        p.style.color = 'black';

        m.style.backgroundColor = 'rgba(65, 65, 65, 1)';
        m.style.color = 'white';

        pp.style.backgroundColor = 'transparent';
        pp.style.color = 'black';

        g.style.backgroundColor = 'transparent';
        g.style.color = 'black';

        gg.style.backgroundColor = 'transparent';
        gg.style.color = 'black';

        xl.style.backgroundColor = 'transparent';
        xl.style.color = 'black';
    }else{
        p.style.backgroundColor = 'transparent';
        p.style.color = 'black';
    }
}

function clickSizeG(){
    if(p.style.backgroundColor === 'rgba(65, 65, 65, 1)' || pp.style.backgroundColor === 'rgba(65, 65, 65, 1)' || m.style.backgroundColor === 'rgba(65, 65, 65, 1)' || g.style.backgroundColor === 'transparent' || gg.style.backgroundColor === 'rgba(65, 65, 65, 1)' || xl.style.backgroundColor === 'rgba(65, 65, 65, 1)'){

        p.style.backgroundColor = 'transparent';
        p.style.color = 'black';

        g.style.backgroundColor = 'rgba(65, 65, 65, 1)';
        g.style.color = 'white';

        pp.style.backgroundColor = 'transparent';
        pp.style.color = 'black';

        m.style.backgroundColor = 'transparent';
        m.style.color = 'black';

        gg.style.backgroundColor = 'transparent';
        gg.style.color = 'black';

        xl.style.backgroundColor = 'transparent';
        xl.style.color = 'black';
    }else{
        p.style.backgroundColor = 'transparent';
        p.style.color = 'black';
    }
}

function clickSizeGG(){
    if(p.style.backgroundColor === 'rgba(65, 65, 65, 1)' || pp.style.backgroundColor === 'rgba(65, 65, 65, 1)' || m.style.backgroundColor === 'rgba(65, 65, 65, 1)' || g.style.backgroundColor === 'rgba(65, 65, 65, 1)' || gg.style.backgroundColor === 'transparent' || xl.style.backgroundColor === 'rgba(65, 65, 65, 1)'){

        p.style.backgroundColor = 'transparent';
        p.style.color = 'black';

        gg.style.backgroundColor = 'rgba(65, 65, 65, 1)';
        gg.style.color = 'white';

        pp.style.backgroundColor = 'transparent';
        pp.style.color = 'black';

        m.style.backgroundColor = 'transparent';
        m.style.color = 'black';

        g.style.backgroundColor = 'transparent';
        g.style.color = 'black';

        xl.style.backgroundColor = 'transparent';
        xl.style.color = 'black';
    }else{
        p.style.backgroundColor = 'transparent';
        p.style.color = 'black';
    }
}

function clickSizeXL(){
    if(p.style.backgroundColor === 'rgba(65, 65, 65, 1)' || pp.style.backgroundColor === 'rgba(65, 65, 65, 1)' || m.style.backgroundColor === 'rgba(65, 65, 65, 1)' || g.style.backgroundColor === 'rgba(65, 65, 65, 1)' || gg.style.backgroundColor === 'rgba(65, 65, 65, 1)' || xl.style.backgroundColor === 'transparent'){

        p.style.backgroundColor = 'transparent';
        p.style.color = 'black';

        xl.style.backgroundColor = 'rgba(65, 65, 65, 1)';
        xl.style.color = 'white';

        pp.style.backgroundColor = 'transparent';
        pp.style.color = 'black';

        m.style.backgroundColor = 'transparent';
        m.style.color = 'black';

        g.style.backgroundColor = 'transparent';
        g.style.color = 'black';

        gg.style.backgroundColor = 'transparent';
        gg.style.color = 'black';
    }else{
        p.style.backgroundColor = 'transparent';
        p.style.color = 'black';
    }
}