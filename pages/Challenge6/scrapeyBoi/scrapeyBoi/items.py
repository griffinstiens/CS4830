# -*- coding: utf-8 -*-

# Define here the models for your scraped items
#
# See documentation in:
# https://docs.scrapy.org/en/latest/topics/items.html

import scrapy
from scrapy.item import Item, Field


class ScrapeyboiItem(scrapy.Item):
    title = Field()
    url = Field()
    updoots = Field()
    excerpt = Field()
