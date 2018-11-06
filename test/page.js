import { Selector } from 'testcafe';

export default class Page {
    constructor () {
        this.loginInput    = Selector('#edit-name');
        this.passwordInput = Selector('#edit-pass');
        this.signInButton  = Selector('#edit-submit');
    }
    async login (t) {
        await t
            .typeText(this.loginInput, 'oppo')
            .typeText(this.passwordInput, 'oppo')
            .click(this.signInButton);
    }
}