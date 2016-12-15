import { SkylerrexroadPage } from './app.po';

describe('skylerrexroad App', function() {
  let page: SkylerrexroadPage;

  beforeEach(() => {
    page = new SkylerrexroadPage();
  });

  it('should display message saying app works', () => {
    page.navigateTo();
    expect(page.getParagraphText()).toEqual('app works!');
  });
});
