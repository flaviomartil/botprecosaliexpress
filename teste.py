import configparser
import json
import asyncio
from datetime import date, datetime
import re
from telethon import TelegramClient, events, sync
from telethon.errors import SessionPasswordNeededError
from telethon.tl.functions.messages import (GetHistoryRequest)
from telethon.tl.types import (
    PeerChannel
)
# Reading Configs
config = configparser.ConfigParser()
config.read("config.ini")

# Setting configuration values
api_id = config['Telegram']['api_id']
api_hash = config['Telegram']['api_hash']

api_hash = str(api_hash)

phone = config['Telegram']['phone']

username = config['Telegram']['username']
user_input_channel = config['Telegram']['channel_link']
client = TelegramClient('anon', api_id, api_hash)
all_products = []

# Listen to messages from target channel
@client.on(events.NewMessage(chats=[-1001352231186]))
async def newMessageListener(event):
    # Get message text
   newMessage = event.message.message
   photo = event.message.media
   all_products.append(
   {"message": newMessage, "photo": photo})
   with open('products.json', 'w') as outfile:
    json.dump(all_products, outfile)
    print(newMessage, photo)


with client:
    client.run_until_disconnected()
