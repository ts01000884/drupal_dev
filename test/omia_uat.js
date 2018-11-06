
import { Selector } from 'testcafe';
import Page from './page';

fixture `Getting Started`
    .page `http://uat.omia.com.tw/`;
const page = new Page();
test('My first test', async t => {
    // const popup =await Selector("#popup-announcement-close");
    // await t.expect(Selector("#popup-announcement-close")).OK();
    //
    var x=10;
    while(x>0){
        await t
            .setPageLoadTimeout(0)
            .click(Selector("#popup-announcement-close"))
            .navigateTo('http://uat.omia.com.tw/');
        x=x-1;
    }



});