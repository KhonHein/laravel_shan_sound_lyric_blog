$(document).ready(function() {
    $postId = $(`#postId`).val();
    $viewCount = Number($('#viewCount').val());

    $viewCount = $viewCount + 1;
    $('.viewCountText').html($viewCount);
    $data = {
        'countNumber': $viewCount,
        'postId': $postId
    };

    $.ajax({
        type: 'get',
        url: '/ajax/add_viewCount',
        data: $data,
        dataType: 'json',
        success: 'response'
    })
});


//image preview
function previewImage() {
    const preview = document.querySelector('.selectPreviewImage');
    const file = document.querySelector('.inputPreviewImage').files[0];
    const reader = new FileReader();
    reader.addEventListener("load", function() {
        preview.src = reader.result;
    }, false);

    if (file) {
        reader.readAsDataURL(file);
    }
}

// click likeCountButton
function clickLikeButton() {
    $like = $(`#like`);
    $lCount = Number($(`.postLikeCount`).val());
    $kissedIcon = $(`.kissedIcon`);
    if ($like.hasClass('liked')) {
        //sub add like count
        $postId = $(`#postId`).val();
        $(`.pLcountText`).html($lCount);
        $lCount = $lCount - 1;
        $data = {
            'countNumber': $lCount,
            'postId': $postId
        };
        //console.log('NO' + $countNumber);
        $.ajax({
            type: 'get',
            url: '/ajax/add_like',
            data: $data,
            dataType: 'json',
            success: 'response'
        })
        $like.removeClass('liked');

    } else {
        $kissedIcon.addClass('kissed'); //change color
        //add like count
        $postId = $(`#postId`).val();
        $countNumber = $lCount + 1;
        $(`.pLcountText`).html($countNumber); // temproy chang in ui
        $data = {
            'countNumber': $countNumber,
            'postId': $postId
        };
        //console.log('Yes' + $countNumber);
        $.ajax({
            type: 'get',
            url: '/ajax/add_like',
            data: $data,
            dataType: 'json',
            success: 'response'
        })

        $like.addClass('liked');

    }
}

//add unlike count
function clickUnlikeButton() {
    $unlike = $(`#unlike`);
    $ulCount = Number($(`.postULikeCount`).val());

    if ($unlike.hasClass('liked')) {
        //sub add ulike count
        $postId = $(`#postId`).val();
        $(`.pULcountText`).html($ulCount);
        $ulCount = $ulCount - 1;
        $data = {
            'countNumber': $ulCount,
            'postId': $postId
        };
        //console.log('NO' + $countNumber);
        $.ajax({
            type: 'get',
            url: '/ajax/add_unlike',
            data: $data,
            dataType: 'json',
            success: 'response'
        })
        $unlike.removeClass('liked');

    } else {
        //add unlike count
        $postId = $(`#postId`).val();
        $ulCount = $ulCount + 1;
        $(`.pULcountText`).html($ulCount);
        $data = {
            'countNumber': $ulCount,
            'postId': $postId
        };
        //console.log('NO' + $countNumber);
        $.ajax({
            type: 'get',
            url: '/ajax/add_unlike',
            data: $data,
            dataType: 'json',
            success: 'response'
        })
        $unlike.addClass('liked');
    }

}

//comment box
function showComents() {
    $icon = $(`.commentIcon`);
    $commentBox = $(`.commentBox`);
    if ($icon.hasClass('clicked')) {

        $icon.removeClass('clicked');
        $commentBox.removeClass('showComments');
    } else {
        $icon.addClass('clicked');
        $commentBox.addClass('showComments');
    }
}


//send comment
function sendComment() {
    $comment = $(`.commentInput`).val();
    $userCommentId = $(`#userCommentId`).val();
    $userCommentName = $(`#userCommentName`).val();
    $postId = $(`#postId`).val();

    $data = {
        'postId': $postId,
        'commentMessage': $comment,
        'userCommentId': $userCommentId,
        'userCommentName': $userCommentName,
    };

    $.ajax({
        type: 'get',
        url: '/write_comments',
        data: $data,
        dataType: 'json',
        success: 'response'
    })
    location.reload();
}

//delete confirmm

$(`.deleteCommentIcon`).click(() => { confirm('Are you sure you want to delete this comment?'); })

// // change role


//change status button
function changeRoleFun() {
    confirm('Are you sure you want to change this role?');
}

//contact me
$(`.contactMeDiv`).hide();
$(`.contactMeBtn`).click(() => {
    if ($(`.contactMeBtn`).hasClass('clicked')) {
        $(`.coverImg`).show();
        $(`.contactMeDiv`).hide();
        $(`.contactMeBtn`).removeClass('clicked');
    } else {
        $(`.coverImg`).hide();
        $(`.contactMeDiv`).show();
        $(`.contactMeBtn`).addClass('clicked');
    }
})

// for clock set time
let today = new Date();
let day = today.getDate();
let minutes = today.getMinutes();
let seconds = today.getSeconds();
let hours = today.getHours()
let startTime = ()=>{
    seconds += 1;
    if(seconds == 60){
        minutes += 1;
        seconds = 0;
    }
    if(minutes == 60){
        hours += 1;
        minutes =0;
    }
    if(hours == 24 ){
        day += 1;
        hours =0;
    }
    let date = "Oef;"+ day +' ? '+"eldef;"+(today.getMonth()+1)+' ? ' +"yD;"+today.getFullYear();
    let time = ' cmOf;,mrf; ' + hours + " ; " + minutes + " ; " + seconds;
    $(`.todayDate`).text(date);
    $(`.todayTime`).text(time);
}

setInterval(startTime,1000)

//home
let leftPaneMenuDiv = $(`.left-pane`);
let menu = $(`.manueStick`);
$(`.manueStick`).click(() => {
    if (menu.hasClass('clicked')) {
        menu.removeClass('clicked');
        $(`#navbarCollapse`).addClass('hideManues');
        leftPaneMenuDiv.removeClass('showMenu');
        leftPaneMenuDiv.addClass('hiddenMenu');

    } else {
        menu.addClass('clicked');
        $(`#navbarCollapse`).removeClass('hideManues');
        leftPaneMenuDiv.addClass('showMenu');
        leftPaneMenuDiv.removeClass('hiddenMenu');
    }

})

//manue bar
// $(`.manueStick`).click(() => {
//     if ($(`.manueStick`).hasClass('clicked')) {

//         $(`.manueStick`).removeClass('clicked');
//         $(`#navbarCollapse`).addClass('hideManues');

//     } else {
//         $(`.manueStick`).addClass('clicked');
       
//         $(`#navbarCollapse`).removeClass('hideManues');
//     }
// });


//welcome
$khonImg = $(`.khonImg`);
$khonImg.hover(()=>{
    $khonImg.removeClass('rounded-circle')
});
$khonImg.mouseleave(()=>{
    $khonImg.addClass('rounded-circle')
});

//contact me show and hide
$(`.welcomeContactDiv`).hide();
$(`.welcomeContact`).click(() => {
    $(`.welcomeContact`).hide();
    $(`.welcomeContactDiv`).show();
});
$(`.welcomeContactDiv`).click(() => {
    $(`.welcomeContactDiv`).hide();
    $(`.welcomeContact`).show();
})

//seeCerti hideCerti
$(`.hideCerti`).hide();
$(`.Certi`).hide();
$(`.seeCerti`).click(() => {
    $(`.seeCerti`).hide();
    $(`.hideCerti`).show();

    $(`.Certi`).show();
    $(`.Hein`).hide();
});
$(`.hideCerti`).click(() => {
    $(`.hideCerti`).hide();
    $(`.seeCerti`).show();

    $(`.Hein`).show();
    $(`.Certi`).hide();
})

//div hover
$(`.welcomeContactDiv`).hover(() => {
    $(`.welcomeContactDiv`).addClass('mouseHoverCSS');
})
$(`.welcomeContactDiv`).mouseleave(() => {
    $(`.welcomeContactDiv`).removeClass('mouseHoverCSS');
})

