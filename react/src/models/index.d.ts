import { ModelInit, MutableModel, PersistentModelConstructor } from "@aws-amplify/datastore";



export declare class Organisation {
  readonly id?: string;
  readonly name?: string;
  constructor(init: ModelInit<Organisation>);
}

type NotificationsMetaData = {
  readOnlyFields: 'createdAt' | 'updatedAt';
}

type AnnouncementsMetaData = {
  readOnlyFields: 'createdAt' | 'updatedAt';
}

export declare class Notifications {
  readonly id: string;
  readonly type?: number;
  readonly value?: string;
  readonly createdAt?: string;
  readonly updatedAt?: string;
  constructor(init: ModelInit<Notifications, NotificationsMetaData>);
  static copyOf(source: Notifications, mutator: (draft: MutableModel<Notifications, NotificationsMetaData>) => MutableModel<Notifications, NotificationsMetaData> | void): Notifications;
}

export declare class Announcements {
  readonly id: string;
  readonly title: string;
  readonly summary?: string;
  readonly body: string;
  readonly organisations?: Organisation;
  readonly status?: string;
  readonly createdAt?: string;
  readonly updatedAt?: string;
  constructor(init: ModelInit<Announcements, AnnouncementsMetaData>);
  static copyOf(source: Announcements, mutator: (draft: MutableModel<Announcements, AnnouncementsMetaData>) => MutableModel<Announcements, AnnouncementsMetaData> | void): Announcements;
}