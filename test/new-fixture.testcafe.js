import { Selector } from 'testcafe';

fixture `New Fixture`
    .page `https://www.omia.com.tw/`;

test('New Test', async t => {
    await t
        .click(Selector('#popup-announcement-close'))
        .wait(0)
        .click(Selector('.field-content.t_art-title').nth(2).find('a'))
        .click(Selector('.copyprevention-transparent-gif').find('img'))
        .click(Selector('.field-content.t_art-title').nth(1).find('a'))
        .click(Selector('.logo').find('a'))
        .click(Selector('.field-content.t_pj-title').nth(2).find('a').withText('MVP'))
        .click(Selector('.copyprevention-transparent-gif').find('img'))
        .click(Selector('.field-content.t_art-title').nth(3).find('a'))
        .click(Selector('.block-content').nth(14).find('a'))
        .typeText(Selector('#edit-name'), 'o')
        .pressKey('backspace')
        .typeText(Selector('#edit-name'), 'oppo')
        .typeText(Selector('#edit-pass'), 'oppo')
        .click(Selector('#edit-submit'));
});