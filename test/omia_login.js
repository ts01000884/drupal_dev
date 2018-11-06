
import { Selector } from 'testcafe';
import Page from './page';

fixture `Getting Started`
    .page `https://www.omia.com.tw/`;
const page = new Page();
test('login oppo', async t => {
    
    await t
        // .click(Selector("#popup-announcement-close"))
        .click(Selector("a[href^='/user/login']"))
        .typeText(Selector('#edit-name'), 'dodo')
        .typeText(Selector('#edit-pass'), 'dodo123')
        .click(Selector('#edit-submit'))
        .hover(Selector("div[class*='user-picture']"))
        .click(Selector("a[href^='/user/']"))
        .setPageLoadTimeout(0)

});
