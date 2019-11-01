# -*- coding: utf-8 -*-
import scrapy
from scrapy.selector import Selector
from scrapeyBoi.items import ScrapeyboiItem


class SpideyboiSpider(scrapy.Spider):
    name = 'spideyBoi'
    allowed_domains = ['stackoverflow.com']
    start_urls = [
        'http://stackoverflow.com/questions?pagesize=50&sort=newest'
    ]

    def parse(self, response):
        questions = Selector(response).xpath('//div[@class="summary"]/h3')

        for question in questions:
            item = ScrapeyboiItem()
            item['title'] = question.xpath(
                'a[@class="question-hyperlink"]/text()'
            ).extract()[0],
            item['url'] = question.xpath(
                'a[@class="question-hyperlink"]/@href'
            ).extract()[0]

            yield item
