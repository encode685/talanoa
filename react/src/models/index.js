// @ts-check
import { initSchema } from '@aws-amplify/datastore';
import { schema } from './schema';



const { Notifications, Announcements, Organisation } = initSchema(schema);

export {
  Notifications,
  Announcements,
  Organisation
};