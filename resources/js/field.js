import IndexField from './components/IndexField'
import DetailField from './components/DetailField'
import FormField from './components/FormField'

Nova.booting((app, store) => {
  app.component('index-iframe-popup', IndexField)
  app.component('detail-iframe-popup', DetailField)
  app.component('form-iframe-popup', FormField)
})
