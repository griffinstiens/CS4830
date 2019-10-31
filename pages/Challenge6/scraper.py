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
            IMAGE_SELECTOR = 'img ::attr(src)'
            yield {
                'name': item.css(NAME_SELECTOR).extract_first(),
                'piece_count': item.xpath(PIECES_SELECTOR).extract_first(),
                'fig_count': item.xpath(MINIFIGS_SELECTOR).extract_first(),
                'image': item.css(IMAGE_SELECTOR).extract_first()
            }
