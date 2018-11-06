import {Selector} from 'testcafe';


fixture`Getting Started`
    .page`https://www.omia.com.tw/`;


function echo_time(){
    var mydate = new Date();
    console.log(mydate.getHours() + ':' + mydate.getMinutes() + ':' + mydate.getSeconds());
}

test('article', async t => {

    var times = 50;


    while (times > 0) {

            await t
                .setPageLoadTimeout(0)
                .click(Selector("a[href^='/project/216172']"))
                .setPageLoadTimeout(0)
                .click(Selector('.copyprevention-processed'))
                .setPageLoadTimeout(0);
        echo_time();
            await t
                .click(Selector("a[href^='/project/47140']"))
                .setPageLoadTimeout(0)
                .click(Selector('.copyprevention-processed'))
                .setPageLoadTimeout(0);
        echo_time();
        await t

                .click(Selector("a[href^='/project/47228']"))
                .setPageLoadTimeout(0)
                .click(Selector('.copyprevention-processed'))
                .setPageLoadTimeout(0);
        echo_time();
        await t

                .click(Selector("a[href^='/project/47230']"))
                .setPageLoadTimeout(0)
                .click(Selector('.copyprevention-processed'))
                .setPageLoadTimeout(0);
        echo_time();
        await t

                .click(Selector("a[href^='/project/40']"))
                .setPageLoadTimeout(0)
                .click(Selector('.copyprevention-processed'))
                .setPageLoadTimeout(0);
        echo_time();
        await t

                .click(Selector("a[href^='/project/4']"))
                .setPageLoadTimeout(0)
                .click(Selector('.copyprevention-processed'))
                .setPageLoadTimeout(0);
        echo_time();
        await t

                .click(Selector("a[href^='/project/41']"))
                .setPageLoadTimeout(0)
                .click(Selector('.copyprevention-processed'))
                .setPageLoadTimeout(0);
        echo_time();
        await t

                .click(Selector("a[href^='/project/37']"))
                .setPageLoadTimeout(0)
                .click(Selector('.copyprevention-processed'))
                .setPageLoadTimeout(0);;
        echo_time();

            if (times == 50) {
                await t
                    .click(Selector("a[href^='/user/login']"))
                    .typeText(Selector('#edit-name'), 'dodo')
                    .typeText(Selector('#edit-pass'), 'dodo123')
                    .click(Selector('#edit-submit'))
                    .setPageLoadTimeout(2);
                echo_time();
            }


            // }else{
            //     // await t
            //     //     .setPageLoadTimeout(0)
            //         // .click(Selector("#popup-announcement-close"))
            //         // .navigateTo('https://www.omia.com.tw/project/47140')
            //         // .navigateTo('https://www.omia.com.tw/project/47228')
            //         // .navigateTo('https://www.omia.com.tw/project/47230')
            //         // .navigateTo('https://www.omia.com.tw/project/40')
            //         // .navigateTo('https://www.omia.com.tw/project/4')
            //         // .navigateTo('https://www.omia.com.tw/project/41')
            //         // .navigateTo('https://www.omia.com.tw/project/37')
            //         // .navigateTo('https://www.omia.com.tw/article/215682')
            //         // .navigateTo('https://www.omia.com.tw/article/215913')
            //         // .navigateTo('https://www.omia.com.tw/article/788')
            //         // .navigateTo('https://www.omia.com.tw/article/215676')
            //         // .navigateTo('https://www.omia.com.tw/article/215996')
            //         // .navigateTo('https://www.omia.com.tw/article/215721')
            //         // .navigateTo('https://www.omia.com.tw/article/215953')
            //         // .setPageLoadTimeout(0);
            // }


            times = times - 1;



    }
});


//
//
// test('login oppo', async t => {
//
//     await t
//         .click(Selector("#popup-announcement-close"))
//         .click(Selector("a[href^='/user/login']"))
//         .typeText(Selector('#edit-name'), 'oppo')
//         .typeText(Selector('#edit-pass'), 'oppo')
//         .click(Selector('#edit-submit'))
//         .hover(Selector("div[class='user-picture']"))
//         .click(Selector("a[href^='/user/']"))
//         .setPageLoadTimeout(0)
//
// });