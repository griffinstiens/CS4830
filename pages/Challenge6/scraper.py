import scrapy

class SpideyBoi(scrapy.Spider):
    name = 'spidey_boi'
    start_urls = ['https://brickset.com/sets/year-2019']

    def parse(self, response):
        SET_SELECTOR = '.set'
       
        
        for item in response.css(SET_SELECTOR):
            NAME_SELECTOR = 'h1 ::text'
            PIECES_SELECTOR = './/dl[dt/text() = "Pieces"]/dd/a/text()'
            MINIFIGS_SELECTOR = './/dl[dt/text() = "Minifigs"]/dd/a/text()'
            yield {
                'name': item.css(NAME_SELECTOR).extract_first(),
                'pieces': item.xpath(PIECES_SELECTOR).extract_first(),
                'figs': item.xpath(MINIFIGS_SELECTOR).extract_first()
            }
