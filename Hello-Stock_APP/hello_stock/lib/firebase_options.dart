// File generated by FlutterFire CLI.
// ignore_for_file: lines_longer_than_80_chars, avoid_classes_with_only_static_members
import 'package:firebase_core/firebase_core.dart' show FirebaseOptions;
import 'package:flutter/foundation.dart'
    show defaultTargetPlatform, kIsWeb, TargetPlatform;

/// Default [FirebaseOptions] for use with your Firebase apps.
///
/// Example:
/// ```dart
/// import 'firebase_options.dart';
/// // ...
/// await Firebase.initializeApp(
///   options: DefaultFirebaseOptions.currentPlatform,
/// );
/// ```
class DefaultFirebaseOptions {
  static FirebaseOptions get currentPlatform {
    if (kIsWeb) {
      return web;
    }
    switch (defaultTargetPlatform) {
      case TargetPlatform.android:
        return android;
      case TargetPlatform.iOS:
        return ios;
      case TargetPlatform.macOS:
        throw UnsupportedError(
          'DefaultFirebaseOptions have not been configured for macos - '
          'you can reconfigure this by running the FlutterFire CLI again.',
        );
      case TargetPlatform.windows:
        throw UnsupportedError(
          'DefaultFirebaseOptions have not been configured for windows - '
          'you can reconfigure this by running the FlutterFire CLI again.',
        );
      case TargetPlatform.linux:
        throw UnsupportedError(
          'DefaultFirebaseOptions have not been configured for linux - '
          'you can reconfigure this by running the FlutterFire CLI again.',
        );
      default:
        throw UnsupportedError(
          'DefaultFirebaseOptions are not supported for this platform.',
        );
    }
  }

  static const FirebaseOptions web = FirebaseOptions(
    apiKey: 'AIzaSyBgN9YzWYqB9MKVNyCD9dixr1nEGBXQCd8',
    appId: '1:192852269165:web:0b971ad7582de3b94d0764',
    messagingSenderId: '192852269165',
    projectId: 'hello-stock-app-scan',
    authDomain: 'hello-stock-app-scan.firebaseapp.com',
    storageBucket: 'hello-stock-app-scan.appspot.com',
  );

  static const FirebaseOptions android = FirebaseOptions(
    apiKey: 'AIzaSyA44bZZNPDz0VsjyzhcpO8ZtIz1ZK7oc5E',
    appId: '1:192852269165:android:6160fe0f5f19460f4d0764',
    messagingSenderId: '192852269165',
    projectId: 'hello-stock-app-scan',
    storageBucket: 'hello-stock-app-scan.appspot.com',
  );

  static const FirebaseOptions ios = FirebaseOptions(
    apiKey: 'AIzaSyBXu9f3OLnLKNkRsEpEfjXg3bfesAVXf_0',
    appId: '1:192852269165:ios:4d2af1ae18fd28e44d0764',
    messagingSenderId: '192852269165',
    projectId: 'hello-stock-app-scan',
    storageBucket: 'hello-stock-app-scan.appspot.com',
    iosClientId: '192852269165-h8pfitegdtjbqp9ieq4s4rd2evfdutgt.apps.googleusercontent.com',
    iosBundleId: 'com.example.helloStock',
  );
}
