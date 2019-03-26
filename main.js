const puppeteer = require('puppeteer');

(async () => {
  const browser = await puppeteer.launch();
  const page = await browser.newPage();

  let times = [
    '子',
    '丑',
    '寅',
    '卯',
    '辰',
    '巳',
    '午',
    '未',
    '申',
    '酉',
    '戌',
    '亥',
  ];

    for (let time of times) {
        await page.goto(`http://localhost:8000?t=${time}`, {
            timeout: 3000000
        });
        await page.pdf({
            path: `fates/紫微在${time}.pdf`,
            format: 'A4',
            printBackground: true,
            // margin: { left: '2cm', top: '4cm', right: '1cm', bottom: '2.5cm' }
        });
    }

    await browser.close();
})();