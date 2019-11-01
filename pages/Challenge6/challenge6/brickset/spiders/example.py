# -*- coding: utf-8 -*-
import scrapy

#from brickset.items import BricksetItem
from .. import items

class BrickSetSpider(scrapy.Spider):
    name = "brickset_spider"
    start_urls = ['http://brickset.com/sets/year-2018']

    def parse(self, response):
        SET_SELECTOR = '.set'
        for brickset in response.css(SET_SELECTOR): 
            NAME_SELECTOR = "h1 ::text"
            PIECES_SELECTOR = ".//dl[dt/text() = 'Pieces']/dd/a/text()"
            IMAGE_SELECTOR = "img ::attr(src)" 
            
            item = items.BricksetItem()
            
            item['name'] = brickset.css(NAME_SELECTOR).extract_first()
            item['pieces'] = brickset.xpath(PIECES_SELECTOR).extract_first()
            item['image'] = brickset.css(IMAGE_SELECTOR).extract_first()

            yield item
#            yield {
#                'name': brickset.css(NAME_SELECTOR).extract_first(),
#                'pieces': brickset.xpath(PIECES_SELECTOR).extract_first(),
#                'image': brickset.css(IMAGE_SELECTOR).extract_first()
#            }


#        NEXT_PAGE_SELECTOR = '.next a ::attr(href)'
#        next_page = response.css(NEXT_PAGE_SELECTOR).extract_first()
#        if next_page:
#            yield scrapy.Request(response.urljoin(next_page), callback = self.parse)
