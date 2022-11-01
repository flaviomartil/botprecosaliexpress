import configparser
import json
import asyncio
import requests

from datetime import date, datetime
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

# Listen to messages from target channel
@client.on(events.NewMessage(chats=[-1001435153850,-1001352231186]))
async def newMessageListener(event):
    newMessage = event.message.message
    print(newMessage)
    url = 'http://localhost:8090'
    payload = {"newMessage": newMessage}
    r = requests.post(url, data=payload)
    print(r.text)
with client:
    client.run_until_disconnected()
