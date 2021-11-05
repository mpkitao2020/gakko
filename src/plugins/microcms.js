const { createClient } = require('microcms-js-sdk')

const config = {
  serviceDomain: 'office',
  apiKey: 'd665fa0f-c7b3-4d59-b0c5-f277fce3abe7',
}

module.exports = {
  oshirase: createClient(config),
}