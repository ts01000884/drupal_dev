
import { Selector } from 'testcafe';
import Page from './page';

fixture `Getting Started`
    .page `https://www.omia.com.tw/article/788`;
const page = new Page();
test('My first test', async t => {

    var times=10;
    while(times>0){

        if(times==10){
            await t.setPageLoadTimeout(0)
                .click(Selector('.copyprevention-processed'))
                .setPageLoadTimeout(0)
                .click(Selector("#popup-announcement-close"))
                .navigateTo('https://www.omia.com.tw/article/788');
        }else{
            await t.click(Selector('.copyprevention-processed'))
                .setPageLoadTimeout(0)
                .navigateTo('https://www.omia.com.tw/article/788');
        }






        times=times-1;
    }
    // await t
    //     .click(Selector("a[href^='/user/login']"))
    //     .typeText(Selector('#edit-name'), 'oppo')
    //     .typeText(Selector('#edit-pass'), 'oppo')
    //     .click(Selector('#edit-submit'))
    //     .hover(Selector("div[class='user-picture']"))
    //     .click(Selector("a[href^='/user/']"))
    //     .setPageLoadTimeout(0)
    // //       .navigateTo('http://devexpress.github.io/testcafe/')
    // ;
    // const location = await t.eval(() => window.location);
    //
    // await t.expect(location.pathname).eql('/testcafe/example/thank-you.html');
});